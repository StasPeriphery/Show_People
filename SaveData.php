<?php

include "GetDataFromUI.php";
include "CsvReader.php";
include "PersonToArray.php";

$getData = new GetDataFromUI();
$person = $getData->GetPerson();
$choice = $getData->GetCsvOrSQL();
$writer = "";


if ($choice == "csv") {
    $writer = new CsvReader();
} else {
    $writer = new CsvReader();
}

$arrayDataPerson = PersonToArray::ConverPersonToArray($person);

$arrayDataPerson = $writer->SetId($arrayDataPerson);
$writer->SetData($arrayDataPerson);


$json_str = json_encode($arrayDataPerson);

echo $json_str;


/*echo '<pre>';
var_dump($arrayDataPerson);
echo '</pre>';

echo '<pre>';
var_dump($json_str);
echo '</pre>';*/

?>