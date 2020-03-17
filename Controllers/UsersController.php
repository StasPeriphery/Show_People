<?php

include "../Models/GetDataFromUI.php";
include "../SupportData/EnumIncludeFile.php";

$getData = new GetDataFromUI();
$getData->GetActionFromUI();

switch ($getData->GetAction())
{
    case EnumIncludeFile::$ADD:
        include "{$getData->GetAction()}" . ".php";
        break;
    case EnumIncludeFile::$GET_ALL_USERS:
        include "{$getData->GetAction()}" . ".php";
        break;
    case EnumIncludeFile::$DELETE_USER:
        include "{$getData->GetAction()}" . ".php";
        break;
}









