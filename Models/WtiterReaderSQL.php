<?php

//include_once  "config.php";


// TODO class enum
// TODO singlton

class WtiterReaderSQL
{
    private $host = 'localhost';
    private $database = 'PeopleDB';
    private $user = 'root';
    private $password = '';

    function GetData()
    {
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($mysqli === false) {
            die("ERROR: Could not connect. "
                . $mysqli->connect_error);
        }
        $query = "SELECT * FROM people";
        $resultArray = array();
        if ($result = $mysqli->query($query)) {
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_array()) {
                    $resultArray[$i++] = array($row["id"], $row["age"], $row["first_name"], $row["second_name"], $row["phone_number"], $row["email"], $row["id_worker"]);
                }
                $result->free();
            } else {
                echo "No matching records are found.";
            }

        }
        $mysqli->close();

        return $resultArray;
    }

    function SetData($data)
    {

        $mysqli = mysqli($this->host, $this->user, $this->password, $this->database);
        $query = "INSERT INTO people VALUES(NULL,'$data[1]',' $data[2]', '$data[3]' , '$data[4]', '$data[5]', 2)"; // TODO EnumPersons

        if ($mysqli === false)
            die("ERROR: Could not connect. "
                . $mysqli->connect_error);

        if ($result = $mysqli->query($query))
            $result->free();

        $mysqli->close();

    }


}