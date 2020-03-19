<?php

define("DEFAULT_COUNT_PEOPLE", 5);
define("COUNT_COL", 6);


//======================= Enum indexator ======================
define("ID", 0);
define("AGE", 1);
define("NAME_FIRST", 2);
define("NAME_SECOND", 3);
define("PHONE_NUMBER", 4);
define("EMAIL", 5);


//======================= Enum ACTION ======================
define("ADD", "AddUser");
define("DELETE_USER", "DeleteUser");
define("GET_ALL_USERS", "GetAllUsers");
define("REFRESH", "Refresh");




//======================= User Controller ======================
define("CSV", "csv");
define("SQL", "sql");

define("CSV_INCLUDE", "UserCsvModel");
define("SQL_INCLUDE", "UserSQLModel");
