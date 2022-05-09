<?php
require_once 'connection.inc.php';

$first_name = filter_var($_POST['firstname'], FILTER_UNSAFE_RAW);
$last_name = filter_var($_POST['lastname'], FILTER_UNSAFE_RAW);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$date  = ("Y-m-d H:i:s");

$sql = "SELECT email FROM subscribers WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "This email has already subscribed. ";
} else {


    if (!isset($_POST['firstname'])) {
        $first_name = "";
    }

    if (!isset($_POST['lastname'])) {
        $first_name = "";
    }

    $sql = "INSERT INTO subscribers (first_name,last_name,email,date) VALUES ('$first_name','$last_name','$email','  $date')";

    mysqli_query($conn, $sql)
        or die(mysqli_error($conn));

    echo "you have been registered successfully";
    header("Refresh: 2;URL=index.php");
}
