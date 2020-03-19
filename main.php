<?php

include_once "../InitFile.php";

$Querydata = $_POST;
$actionModel = new ActionModel();
$actionModel->SetChoice($Querydata["sqlCsv"]);

$jsonRes = null;

switch ($Querydata["action"]) {
    case ADD:
        $jsonRes = $actionModel->Add($Querydata);
        break;
    case GET_ALL_USERS:
        $jsonRes = $actionModel->GetAll();
        break;
    case DELETE_USER:
        $jsonRes = $actionModel->Delete();
        break;
}

$jsonRes = json_encode($jsonRes);

echo $jsonRes;
