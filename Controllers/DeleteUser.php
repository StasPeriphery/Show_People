<?php

include "../Models/Person.php";
include "../Models/CsvReader.php";
include "../Parsers/PersonToArray.php";
include "../SupportData/EnumPersons.php";
include "../Models/WtiterReaderSQL.php";

$getData = new GetDataFromUI();

$getData->InitDataPerson();
$person = $getData->GetPerson();
$choice = $getData->GetCsvOrSQL();

$strDelete = "";

echo "<pre>";
var_dump($choice);
echo "</pre>";

if ($choice == "csv") {
    $deleter = new CsvReader();
} else {
    $deleter = new WtiterReaderSQL();
}

if (isset($_POST["emailDelete"])) {
    $strDelete = $_POST["emailDelete"];
} else {
    echo "БАЛАЛАЙКА DELETE";
    die;
}

$result = $deleter->deleteLineInFile($strDelete);

$resaltArray["result"] = $result; // true - was delete
echo json_encode($resaltArray);


