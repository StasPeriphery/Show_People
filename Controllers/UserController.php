<?php
include "Parsers/PersonToArray.php";


class UserController
{

    function __construct()
    {
    }

    function Refresh($request)
    {
        return $this->GetAll($request);
    }

    function GetPage($type_choice)
    {
        $userModel = null;

        switch ($type_choice) {
            case CSV:
                HelperInclude::LoadModel(CSV_INCLUDE);
                $userModel = new UserCsvModel();
                break;
            case SQL:
                HelperInclude::LoadModel(SQL_INCLUDE);
                return $userModel = new UserSQLModel();
                break;
        }
        $data = $userModel->GetData();
        LoaderTpl::LoadTpl('index', $data);

    }

    function Add($request)
    {
        $userModel = null;
        switch ($request["sqlCsv"]) {
            case CSV:
                HelperInclude::LoadModel(CSV_INCLUDE);
                $userModel = new UserCsvModel();
                break;
            case SQL:
                HelperInclude::LoadModel(SQL_INCLUDE);
                $userModel = new UserSQLModel();
                break;
        }
        return $userModel->SetData(PersonToArray::ConverPersonToArray($request));
    }

    function GetAll($request)
    {
        $userModel = null;

        switch ($request["sqlCsv"]) {
            case CSV:
                HelperInclude::LoadModel(CSV_INCLUDE);
                $userModel = new UserCsvModel();
                break;
            case SQL:
                HelperInclude::LoadModel("ConnectionBD");
                HelperInclude::LoadRoot("configDB");
                HelperInclude::LoadModel(SQL_INCLUDE);
                $userModel = new UserSQLModel();
                break;
        }
        return $userModel->GetData();
    }

    function Delete($request)
    {
        $userModel = null;
        switch ($request["sqlCsv"]) {
            case CSV:
                HelperInclude::LoadModel(CSV_INCLUDE);
                $userModel = new UserCsvModel();
                break;
            case SQL:
                HelperInclude::LoadModel(SQL_INCLUDE);
                $userModel = new UserSQLModel($request);
                break;
        }

        return $userModel->deleteLineInFile($request["emailDelete"]);

    }

}