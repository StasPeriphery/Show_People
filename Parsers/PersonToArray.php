<?php

class PersonToArray
{
    private static $arr;

    static function ConverPersonToArray($person)
    {
        PersonToArray::$arr = array();
        PersonToArray::$arr[ID] = $person["name_first"];
        PersonToArray::$arr[AGE] = (int)$person["age"];
        PersonToArray::$arr[NAME_FIRST] = $person["name_first"];
        PersonToArray::$arr[NAME_SECOND] = $person["name_second"];
        PersonToArray::$arr[PHONE_NUMBER] = $person["phone_number"];
        PersonToArray::$arr[EMAIL] = $person["email"];

        return PersonToArray::$arr;
    }
}