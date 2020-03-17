<?php

include "../Models/Person.php";
include "../Models/CsvReader.php";
include "../Models/WtiterReaderSQL.php";

$getData = new GetDataFromUI();
$getData->InitDataPerson();
$choice = $getData->GetCsvOrSQL();
$writer = "";

switch ($choice) {
    case "csv":
        $writer = new CsvReader();
        break;
    case "sql":
        $writer = new WtiterReaderSQL();
        break;
}

$allPeople = $writer->GetData();

$json_str = json_encode($allPeople);
echo $json_str;

?>