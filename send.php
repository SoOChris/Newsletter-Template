<?php
require_once 'connection.inc.php';

$subject = $first_name = filter_var($_POST['subject'], FILTER_UNSAFE_RAW);
$body = $first_name = filter_var($_POST['body'], FILTER_UNSAFE_RAW);

$headers = 'From: postmaster@yourdomain.com' . '\n';
$headers .= 'Reply-to: contact@yourdomain.com' . '\n';
$headers .= 'Content-Type: text/plain; charset="iso-8859-1"' . '\n';
$headers .= 'Content-Transfer-Encoding: 8bit';

$query = "SELECT * FROM $table";
$result = mysqli_query($conn, $query)
    or die('Error:' . mysqli_error($conn));

while ($row = mysqli_fetch_array($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];

    $msg = "Dear $first_name $last_name, \n $body";
    if (mail($email, $subject, $msg, $headers)) {
        echo "email send to $email";
    }
}
