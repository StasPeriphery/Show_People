<?php


interface IShowA
{
    public function getName();
}

interface IShowB
{
    public function getName2();
}

class ShowA implements IShowA, IShowB
{
    private $name = "Hello A";

    function getName()
    {
        echo $this->name;
    }

    function getName2()
    {
        echo $this->name . "2";
    }

}

$show = new ShowA();


//include "LoaderTpl.php";
//include "HelperInclude.php";
//include "Controllers/UserController.php";
//include "SupportData/Constants.php";
//
//$user = new UserController();
//
//$user->GetPage('csv');


?>
