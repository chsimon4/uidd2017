<?php
session_start();
include 'dbh.php';

$sql = "INSERT INTO user (first, last, email, pwd, pwdag) 
VALUES ('$first', '$last', '$email', '$pwd', '$pwdag', 'totalamount')";
$result = mysqli_query($conn, $sql);

$totalamount = $_SESSION['totalamount']

echo "$_SESSION['totalamount]";