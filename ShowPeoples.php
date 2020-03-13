<?php

include "CsvReader.php";

$csvReader = new CsvReader();

$allPeople = $csvReader->GetData();
$json_str = json_encode($allPeople);

echo $json_str ;




?>