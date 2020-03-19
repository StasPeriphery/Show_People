<?php


class HelperInclude
{

    static function LoadModel($strInclude)
    {
        include "Models/" . $strInclude . ".php";
    }

    static function  LoadSupportData($strInclude)
    {
        include "SupportData/" . $strInclude . ".php";
    }

    static function  LoadView($strInclude)
    {
        include "View/" . $strInclude . ".php";
    }
    static function  LoadRoot($strInclude)
    {
        include   $strInclude . ".php";
    }
}