<?php

// TODO class enum
// TODO singlton

include "../Models/ConnectionBD.php";

class WtiterReaderSQL
{
    private $host = 'localhost';
    private $database = 'PeopleDB';
    private $user = 'root';
    private $password = '';

    function GetData()
    {
        if (ConnectionBD::GetConnect() == null) {
            die("ERROR: Could not connect. "
                . ConnectionBD::GetConnect()->connect_error);
        }
        $query = "SELECT * FROM people";
        $resultArray = array();
        if ($result = ConnectionBD::GetConnect()->query($query)) {
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

        return $resultArray;
    }

    function SetData($data)
    {
        $query = "INSERT INTO people VALUES(NULL,'$data[1]',' $data[2]', '$data[3]' , '$data[4]', '$data[5]', 2)"; // TODO EnumPersons

        if (ConnectionBD::GetConnect()->connect_errno) {
            echo "Failed to connect to MySQL: " . ConnectionBD::GetConnect()->connect_error;
        }
        if (!$result = ConnectionBD::GetConnect()->query($query)) {
            echo "SOME SHIT SET DATA IN WRITEREADERSQL";
        }

    }


}