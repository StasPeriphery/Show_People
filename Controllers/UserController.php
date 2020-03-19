<?php


include_once "../config.php";

$getData = new GetDataFromUI();
$getData->InitDataPerson();

$actionModel = new ActionModel();
$actionModel->SetChoice($getData->GetChoice());

$jsonRes = null;

switch ($getData->GetAction()) {
    case ADD:
        $jsonRes = $actionModel->Add($getData->GetPerson());
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
