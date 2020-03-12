<?php



class PersonToArray
{
    private static $arr;

    static function ConverPersonToArray($person)
    {
        PersonToArray::$arr = array();
        PersonToArray::$arr[EnumPersons::$ID] = $person->id;
        PersonToArray::$arr[EnumPersons::$AGE] = $person->age;
        PersonToArray::$arr[EnumPersons::$NAME_FIRST] = $person->name_first;
        PersonToArray::$arr[EnumPersons::$NAME_SECOND] = $person->name_second;
        PersonToArray::$arr[EnumPersons::$PHONE_NUMBER] = $person->phone_number;
        PersonToArray::$arr[EnumPersons::$EMAIL] = $person->email;

        return PersonToArray::$arr;
    }
}