<?php


class UserCsvModel
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
        $data = $this->SetId($data);
        if (($h = fopen("test.csv", "a")) !== FALSE) {
            if (fputcsv($h, $data) !== FALSE)

                fclose($h);

            return $data;
        }
    }


    private function SetId($data)
    {
        $lastRow = $this->GetLastRow();
        if ($lastRow[0] == NULL) {
            $data[ID] = 0;
        } else {
            $data[ID] = ((int)($lastRow[ID])) + 1;
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
        echo "<pre>";
        var_dump($string);
        echo "</pre>";

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