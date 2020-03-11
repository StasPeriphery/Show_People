<?php
include "Constants.php";
include "PeopleData.php";

class MockData
{

    private $data;

    public function __construct($count = DEFAULT_COUNT_PEOPLE)
    {
        for ($i = 0; $i < $count; ++$i) {
            $data[i] = new Person();
            $data[i]->age = PeopleData::$age[rand(0, count(PeopleData::$age))];
            $data[i]->email = PeopleData::$email[rand(0, count(PeopleData::$email))];
            $data[i]->name_first = PeopleData::$name_first[rand(0, count(PeopleData::$name_first))];
            $data[i]->name_second = PeopleData::$name_second[rand(0, count(PeopleData::$name_second))];
            $data[i]->phone_number = PeopleData::$phone_number[rand(0, count(PeopleData::$phone_number))];
        }
    }

    function getId()
    {
        return $this->data;
    }

}


?>