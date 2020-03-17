<?php

include "../Models/CsvReader.php";

$csvReader = new CsvReader();

$strDelete = "";

if (isset($_POST["emailDelete"])) {
    $strDelete = $_POST["emailDelete"];
} else {
    echo "БАЛАЛАЙКА DELETE";
    die;
}

$result = $csvReader->deleteLineInFile($strDelete);

$resaltArray["result"] = $result;
echo json_encode($resaltArray);


