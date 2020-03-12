<!DOCTYPE html>
<html>
<head>
    <title>PeopleApp</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/eventButtons.js" ></script>

</head>
<body>

<table>

  <div id="add_bloc">
        <form id="foo">
            <div id="">
                <lable>first name</lable>
                <input type="text" name="name_first" id="name_first">
            </div>
            <div>
                <lable>second name</lable>
                <input type="text" name="name_second" id="name_second">
            </div>
            <div>
                <lable>age</lable>
                <input type="number" name="age" id="age">
            </div>
            <div>
                <lable>phone number</lable>
                <input type="text" name="phone_number" id="phone_number">
            </div>
            <div>
                <lable>email</lable>
                <input type="text" name="email" id="email">
            </div>
            <button type="submit" id="submit" ><i class="fa fa-check"></i> Send Message</button>

        </form>
    </div>

    <tr>
        <th>Age</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>


  <!--  --><?php
/*    $rows = file('test.csv');
    $last_row = array_pop($rows);
    $data = str_getcsv($last_row);
      echo '<pre>';
    var_dump($data);
    echo '</pre>';

    */?>

   <!-- --><?php
/*    include "ConnectDB.php";
    include "MockData.php";
    include "Person.php";
    include "CsvReader.php";

    $data = new MockData();
    $persons = $data->getData();

    $csvR = new CsvReader();

    $csvR->SetData();

    $data = $csvR->GetData();

    //  echo '<pre>';
    //var_dump($data);
    //echo '</pre>';

    //echo '<pre>';
    //var_dump($persons);


    for ($i = 0; $i < DEFAULT_COUNT_PEOPLE; ++$i) {
        echo "<tr>";
        echo "<td>  ";
        echo $persons[$i]->age;
        echo "<td>  ";
        echo $persons[$i]->name_first;
        echo "<td> ";
        echo $persons[$i]->name_second;
        echo "<td> ";
        echo $persons[$i]->phone_number;
        echo "<td> ";
        echo $persons[$i]->email;
        echo "</tr>";
    }

    */?>
<!--</table>-->


</body>



</html>


