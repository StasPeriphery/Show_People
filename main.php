<?php

include_once "Controllers/UserController.php";
include_once "SupportData/Constants.php";
include_once "SupportData/Constants.php";
include_once "LoaderTpl.php";

include "/HelperInclude.php";

$request = $_POST;

$user = new UserController($request);

$jsonRes = null;


switch ($request["action"]) {
    case ADD:
        $jsonRes = $user->Add($request);
        break;
    case GET_ALL_USERS:
        $jsonRes = $user->GetAll($request);
        break;
    case DELETE_USER:
        $jsonRes = $user->Delete($request);
        break;
    case REFRESH:
        $jsonRes = $user->Refresh($request);
        break;

}

$jsonRes = json_encode($jsonRes);

echo $jsonRes;
