<?php

$sname= "localhost";
$uname= "root";
$password = "O@ZC2022db";
$db_name = "school";

try {
    $conn = new PDO("mysql:host=$sname;dbname=$db_name", $uname, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "DB Connection failed";
}


