<?php

include "EnumPersons.php";

class CsvReader
{
    public $dataReturn;

    function GetData()
    {
        if (($h = fopen("test.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
                $this->dataReturn[] = $data;
            }
            fclose($h);
            return $this->dataReturn;
        }
    }

    function SetData($data)
    {
        if (($h = fopen("test.csv", "a")) !== FALSE) {
            if (fputcsv($h, $data) !== FALSE)

                fclose($h);
            return $this->dataReturn;
        }
    }


    function SetId($data)
    {
        $lastRow = $this->GetLastRow();
        if ($lastRow[0] == NULL) {
            $data[EnumPersons::$ID] = 0;

        } else {
            $data[EnumPersons::$ID] = ((int)($lastRow[EnumPersons::$ID])) + 1;
        }
        return $data;
    }


    private function GetLastRow()
    {
        $rows = file('test.csv');
        $last_row = array_pop($rows);
        $data = str_getcsv($last_row);

        return $data;
    }

    function deleteLineInFile($string)
    {
        $i = 0;
        $array = array();
        $resuleDelete = false;

        $read = fopen('test.csv', "r");
        while (!feof($read)) {
            $array[$i] = fgets($read);
            ++$i;
        }
        fclose($read);

        $write = fopen('test.csv', "w");
        foreach ($array as $a) {
            if (!strstr($a, $string))
                fwrite($write, $a);
            else
                $resuleDelete = true;
        }
        fclose($write);
        return $resuleDelete;
    }


}