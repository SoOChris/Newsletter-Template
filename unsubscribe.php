<?php
require_once 'connection.inc.php';

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$sql = "SELECT email FROM database WHERE email='$email'";
$result = $conn->query($sql);


$sql = "DELETE FROM subscribers WHERE email ='$email'";

$result = mysqli_query($conn, $sql)
    or die("Error removing from database");


echo "you have been successfuly unsubscribed";

mysqli_close($conn);
header("Refresh: 2;URL=index.php");
