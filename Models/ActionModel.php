<?php

class ActionModel
{
    private $choice;
    private $csvModel;
    private $sqlModel;

    public function __construct()
    {
        $this->csvModel = new UserCsvModel();
        $this->sqlModel = new UserSQLModel();
    }

    function SetChoice($choice)
    {
        $this->choice = $choice;
    }

    function Add($user, $choice)
    {
        $res = null;
        if ($choice == "csv") {
            $res = $this->csvModel->SetData(PersonToArray::ConverPersonToArray($user));
        } else {
            $res = $this->sqlModel->SetData(PersonToArray::ConverPersonToArray($user));
        }
        return $res;
    }

    function GetAll($choice)
    {
        $res = null;
        if ($choice == "csv") {
            $res = $this->csvModel->GetData();
        } else {
            $res = $this->sqlModel->GetData();
        }
        return $res;
    }

    function Delete($request, $choice)
    {
        $res = null;
        if ($choice == "csv") {
            $this->csvModel->deleteLineInFile($request["emailDelete"]);
        } else {
            $this->sqlModel->deleteLineInFile($request["emailDelete"]);
        }
        return $res;

    }


}