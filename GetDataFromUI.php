<?php

include "Person.php";

class GetDataFromUI
{

    private $errorMSG;
    private $person;


    public function __construct()
    {
        $this->person = new Person();
        $this->person->id = 0;
        $this->person->name_first = $this->GetNameFirst();
        $this->person->name_second = $this->GetNameSecond();
        $this->person->age = $this->GetAge();
        $this->person->phone_number = $this->GetPhoneNumber();
        $this->person->email = $this->GetEmail();

    }

    function GetPerson()
    {
        return $this->person;
    }

    function GetNameFirst()
    {
        if (empty($_POST["name_first"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["name_first"];
        }
    }


    function GetNameSecond()
    {
        if (empty($_POST["name_second"])) {
            $this->errorMSG = "<li>Name is required</li>";
        } else {
            return $_POST["name_second"];
        }
    }


    function GetAge()
    {
        if (empty($_POST["age"])) {
            $this->errorMSG .= "<li>Subject is required</li>";
        } else {
            return $_POST["age"];
        }

    }

    function GetPhoneNumber()
    {
        if (empty($_POST["phone_number"])) {
            $this->errorMSG .= "<li>Subject is required</li>";
        } else {
            return $phone_number = $_POST["phone_number"];
        }
    }

    function GetEmail()
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