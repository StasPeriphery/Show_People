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
        <input type="text" name="email" id="emailDelete">
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
        <button type="submit" id="addUser"><i class="fa fa-check"></i> Add People</button>
        <button type="submit" id="getAllUsers"><i class="fa fa-check"></i> showAllPeoples</button>
        <div>
            <input type="radio" id="select" name="csv_sql" value="csv" checked>
            <label for="csv">CSV</label><br>
            <input type="radio" id="select" name="csv_sql" value="sql">
            <label for="sql">SQL</label>
        </div>
    </form>
</div>

<?php
include "table.php";

?>

</body>
</html>


