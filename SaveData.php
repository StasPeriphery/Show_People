<?php

include "GetDataFromUI.php";
include "CsvReader.php";
include "PersonToArray.php";

$getData = new GetDataFromUI();
$person = $getData->GetPerson();

echo "getData->GetPerson()";
echo '<pre>';
var_dump($person);
echo '</pre>';

$arrayDataPerson = PersonToArray::ConverPersonToArray($person);

echo "arrayDataPerson";
echo '<pre>';
var_dump($arrayDataPerson);
echo '</pre>';

$csvReader = new CsvReader();
$csvReader->SetData($arrayDataPerson);


echo '<pre>';
var_dump($arrayDataPerson);
echo '</pre>';


?>