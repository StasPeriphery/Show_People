<?php


class UserSQLModel
{

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
        $query = "INSERT INTO people VALUES(NULL, '$data[AGE]', '$data[NAME_FIRST]',' $data[NAME_SECOND]', '$data[PHONE_NUMBER]' , '$data[EMAIL]', 2)"; // TODO EnumPersons

        if (ConnectionBD::GetConnect()->connect_errno) {
            echo "Failed to connect to MySQL: " . ConnectionBD::GetConnect()->connect_error;
        }
        $result = null;

        if (!$result = ConnectionBD::GetConnect()->query($query)) {
            echo "SOME SHIT SET DATA IN WRITEREADERSQL";
        }

        $id =  mysqli_insert_id(ConnectionBD::GetConnect());
        $data[ID] = $id;



        return $data;
    }

    function deleteLineInFile($string)
    {
        return true;
    }


}