<?php

$user = "root";
$password = "";
$host = "localhost";
$db = "newsletter";
$table = "subscribers";


$conn = mysqli_connect($host, $user, $password, $db)
    or die("Unable to connect to database");
