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

            $lastRow = $this->GetLastRow();

            echo '</pre>';
            if ($lastRow[EnumPersons::$ID] == "id") {
                $data[EnumPersons::$ID]= 0;
                echo "data = 0";
                echo '<pre>';
                var_dump($data);
                echo '</pre>';
            } else {
                $data[EnumPersons::$ID] = ((int)($lastRow[EnumPersons::$ID])) + 1;
                echo is_int((int)($lastRow[EnumPersons::$ID]));

                echo "data";
                echo '<pre>';
                var_dump($data);
                echo '</pre>';
            }
            echo "FINISH";
            echo '<pre>';
            var_dump($data);
            echo '</pre>';



            if (fputcsv($h, $data) !== FALSE)

                fclose($h);
            return $this->dataReturn;
        }
    }

    private function GetLastRow()
    {
        $rows = file('test.csv');
        $last_row = array_pop($rows);
        $data = str_getcsv($last_row);

        return $data;
    }


}