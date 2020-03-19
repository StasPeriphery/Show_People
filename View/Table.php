<table id="allPeople">

    <tr class="NoDelete">
        <th>Id</th>
        <th>Age</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Id_status</th>
    </tr>
<?php

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
