<?php


class LoaderTpl
{

    static function LoadTpl($nametpl, $data)
    {
        include "View/".$nametpl.".php";

    }

}