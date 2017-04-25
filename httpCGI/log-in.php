<?php
session_start();
include 'dbh.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE email='$email' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect!";
}  else {
	$_SESSION['id'] = $row['id'];
	$_SESSION['totalamount'] = $row['totalamount'];
	echo "Your total amount is "; echo $_SESSION['totalamount']; echo ".";
}

//header("Location: index.html");