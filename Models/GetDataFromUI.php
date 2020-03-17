<?php


class GetDataFromUI
{

    private $errorMSG;
    private $person;
    private $chose;
    private $action;
    private $deleteEmail;

    public function __construct()
    {

    }

    function InitDataPerson()
    {
        $this->person = new Person();
        $this->person->id = 0;
        $this->person->name_first = $this->GetNameFirstFromUI();
        $this->person->name_second = $this->GetNameSecondFromUI();
        $this->person->age = $this->GetAgeFromUI();
        $this->person->phone_number = $this->GetPhoneNumberFromUI();
        $this->person->email = $this->GetEmailFromUI();
        $this->chose = $this->GetChoiceFromUI();
        $this->deleteEmail = $this->GetIdToDeleteUser();
    }

    function GetCsvOrSQL()
    {
        return $this->chose;
    }

    function GetPerson()
    {
        return $this->person;
    }

    function GetAction()
    {
        return $this->action;
    }

    private function GetIdToDeleteUser()
    {
        if (empty($_POST["emailDelete"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["emailDelete"];
        }
    }

    function GetActionFromUI()
    {
        if (empty($_POST["action"])) {
            $this->errorMSG = "<li>Name is required</li>";  // TODO ERROR.PHP CHANG
        } else {
            return $this->action = $_POST["action"];
        }
    }

    private function GetNameFirstFromUI()
    {
        if (empty($_POST["name_first"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["name_first"];
        }
    }

    private function GetChoiceFromUI()
    {
        if (empty($_POST["sqlCsv"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["sqlCsv"];
        }
    }

    private function GetNameSecondFromUI()
    {
        if (empty($_POST["name_second"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["name_second"];
        }
    }


    private function GetAgeFromUI()
    {
        if (empty($_POST["age"])) {
            $this->errorMSG .= "<li>Subject is required</li>";
        } else {
            return $_POST["age"];
        }

    }

    private function GetPhoneNumberFromUI()
    {
        if (empty($_POST["phone_number"])) {
            $this->errorMSG .= "<li>Subject is required</li>";
        } else {
            return $phone_number = $_POST["phone_number"];
        }
    }

    private function GetEmailFromUI()
    {
        if (empty($_POST["email"])) {
            $this->errorMSG .= "<li>Email is required</li>";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $this->errorMSG .= "<li>Invalid email format</li>";
        } else {
            return $email = $_POST["email"];
        }
    }

}