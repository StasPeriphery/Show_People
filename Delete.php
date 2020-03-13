<?php

include "CsvReader.php";


$csvReader = new CsvReader();


$strDelete = "";

if (isset($_POST["emailDelete"])) {
    $strDelete = $_POST["emailDelete"];
} else {
    echo "БАЛАЛАЙКА";
    die;
}


$result = $csvReader->deleteLineInFile($strDelete);

echo '<pre>';
var_dump($result);
echo '</pre>';

$resaltArray["result"] = $result;
echo json_encode($resaltArray);

