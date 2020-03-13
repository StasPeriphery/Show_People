<!DOCTYPE html>
<html>
<head>
    <title>PeopleApp</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/eventButtons.js"></script>

</head>
<body>

<div id="delete_block">
    <form id="delete_form">
        <lable>Email</lable>
        <input type="text" name="email" id="email_delete">
        <button type="submit" id="delete"><i class="fa fa-check"></i> delete</button>
    </form>
</div>

</div>
<div id="add_bloc">
    <form id="foo">
        <div>
            <lable>age</lable>
            <input type="number" name="age" id="age">
        </div>
        <div id="">
            <lable>first name</lable>
            <input type="text" name="name_first" id="name_first">
        </div>
        <div>
            <lable>second name</lable>
            <input type="text" name="name_second" id="name_second">
        </div>

        <div>
            <lable>phone number</lable>
            <input type="text" name="phone_number" id="phone_number">
        </div>
        <div>
            <lable>email</lable>
            <input type="text" name="email" id="email">
        </div>
        <button type="submit" id="submit"><i class="fa fa-check"></i> Add People</button>
        <button type="submit" id="showAllPeoples"><i class="fa fa-check"></i> showAllPeoples</button>

        <div>
            <input type="radio" id="select" name="csv_sql" value="csv" checked>
            <label for="csv">CSV</label><br>
            <input type="radio" id="select" name="csv_sql" value="sql">
            <label for="sql">SQL</label>
        </div>
    </form>
</div>


<table id="allPeople">

    <tr>
        <th>Id</th>
        <th>Age</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>


    <?php
//    $host = 'localhost'; // адрес сервера
//    $database = 'PeopleDB'; // имя базы данных
//    $user = 'root'; // имя пользователя
//    $password = ''; // пароль
//
//    $link = mysqli_connect($host, $user, $password, $database);
//    //$query = "INSERT INTO people_test VALUES(NULL, 20, 'Name','Name_Second','s','Name@gmail.com')";
//    $query = "INSERT INTO films VALUES(NULL, 'asd',1)";
//    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//    if ($result) {
//        echo '<pre>';
//        var_dump($result);
//        echo '</pre>';
//        //echo "Выполнение запроса прошло успешно";
//    }
//    mysqli_close($link);

    ?>

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

        */ ?>
</table>
</body>
</html>


