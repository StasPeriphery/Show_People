<?php

include_once "../Models/Person.php";
include_once "../Models/GetDataFromUI.php";
include_once "../Models/CsvReader.php";
include_once "../Parsers/PersonToArray.php";
include_once "../SupportData/EnumPersons.php";
include_once "../Models/WtiterReaderSQL.php";

$getData = new GetDataFromUI();

$person = $getData->GetPerson();
$choice = $getData->GetCsvOrSQL();
$writer = "";

//echo "AFTER GetCsvOrSQL";       //TODO DELETE
//echo '<pre>';
//var_dump($choice);
//echo '</pre>';

if ($choice == "csv") {
    $writer = new CsvReader();
} else {
    $writer = new WtiterReaderSQL();
}

$arrayDataPerson = PersonToArray::ConverPersonToArray($person);
$writer->SetData($arrayDataPerson);


$json_str = json_encode($arrayDataPerson);

echo $json_str;

///*echo '<pre>';
//var_dump($arrayDataPerson);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($json_str);
//echo '</pre>';*/

?>