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
$writer = "";

if ($choice == "csv") {
    $writer = new CsvReader();
} else {
    $writer = new WtiterReaderSQL();
}

$arrayDataPerson = PersonToArray::ConverPersonToArray($person);
$writer->SetData($arrayDataPerson);
$json_str = json_encode($arrayDataPerson);

echo $json_str;

?>