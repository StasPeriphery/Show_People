<!DOCTYPE html>
<html>
<head>
    <title>PeopleApp</title>
    <meta charset="utf-8">

</head>
<body>

<table>

    <tr>
        <th>Age</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>

    <?php
    include "ConnectDB.php";
    include "MockData.php";
    include "Person.php";

    //$data = new MockData();

    for ($i = 0; $i < DEFAULT_COUNT_PEOPLE; ++$i)
    {
        echo "<tr>";
        echo "<td> $i";
        echo "<td> $i";
        echo "<td> $i";
        echo "<td> $i";
        echo "<td> $i";
        echo "</tr>";

           
    }

    ?>

</table>


</body>

</html>


