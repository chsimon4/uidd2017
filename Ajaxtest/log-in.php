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
	//echo "You are logged in!<br>";
	//echo "Your account ID is "; echo $_SESSION['id']; echo ".";
	//echo "Your total amount is"; echo $_SESSION['totalamount'];

	echo $_SESSION['totalamount'];
}

//header("Location: index.html");