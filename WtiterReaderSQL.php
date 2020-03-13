<?php

class WtiterReaderSQL
{
    private $host = 'localhost';
    private $database = 'PeopleDB';
    private $user = 'root';
    private $password = '';

    function foo()
    {

        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        //$query = "INSERT INTO people_test VALUES(NULL, 20, 'Name','Name_Second','s','Name@gmail.com')";
        $query = "INSERT INTO films VALUES(NULL, 'asd',1)";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result) {
            echo '<pre>';
            var_dump($result);
            echo '</pre>';
            //echo "Выполнение запроса прошло успешно";
        }
        mysqli_close($link);
    }
}