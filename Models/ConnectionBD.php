<?php


class ConnectionBD
{
    private static $connectObj = null;

    public static function GetConnect()
    {
        if (static::$connectObj == null) {
            return static::$connectObj = new mysqli(HOST, USER, PASSWORD, DATA_BASE);
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




