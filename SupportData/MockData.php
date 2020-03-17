<?php
//include "Constants.php";
//include "PeopleData.php";

class MockData
{

    public $data;

    public function __construct($count = DEFAULT_COUNT_PEOPLE)
    {
        for ($i = 0; $i < $count; ++$i) {
            $this->data[$i] = new Person();
            $this->data[$i]->id = 0;
            $this->data[$i]->age = PeopleData::$age[rand(0, count(PeopleData::$age) - 1)];
            $this->data[$i]->email = PeopleData::$email[rand(0, count(PeopleData::$email) - 1)];
            $this->data[$i]->name_first = PeopleData::$name_first[rand(0, count(PeopleData::$name_first) - 1)];
            $this->data[$i]->name_second = PeopleData::$name_second[rand(0, count(PeopleData::$name_second) - 1)];
            $this->data[$i]->phone_number = PeopleData::$phone_number[rand(0, count(PeopleData::$phone_number) - 1)];
        }
    }

    function getData()
    {
        return $this->data;
    }

}


?>