<table id="allPeople">

    <tr>
        <th>Id</th>
        <th>Age</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Id_status</th>
    </tr>
<?php

include "Models\UserCsvModel.php";
include_once "configDB.php";

$readerWriter = new UserCsvModel();

$data = $readerWriter->GetData();

if ($data) {
    $strInsert = "";
    for ($i = 0; $i < count($data); ++$i) {
        echo "<tr>";
        for ($j = 0; $j < count($data[$i]); ++$j) {
            echo "<td>{$data[$i][$j]}</td>";
        }
        echo "</tr>";
    }
}

?>

</table>
