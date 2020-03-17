<?php

class ConnectionBD
{
    private static $connectObj = null;
    private static $host = 'localhost';
    private static $database = 'PeopleDB';
    private static $user = 'root';
    private static $password = '';

    public static function GetConnect()
    {
        if (static::$connectObj == null) {
            return static::$connectObj = new mysqli(static::$host, static::$user, static::$password, static::$database);
        } else {
            return static::$connectObj;
        }
    }

    public static function CloseConnectDB()
    {
        if (static::$connectObj)
            static::$connectObj->close();
    }
}

ConnectionBD::GetConnect();


