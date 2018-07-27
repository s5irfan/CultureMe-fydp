<?php

include("db-connection.php");
session_start();
$UserName = $_POST['userName'];
$firstName = $_POST['first'];
$lastName = $_POST['last'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$R_password = $_POST['confirmPassword'];

if($password == $R_password){
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
} else {
	print("<script>alert('Passwords do not match!'); window.location='./student_signup.php';</script>");
	exit();
}
// SQL statement
	$sqlPopulateTableStatement = "INSERT INTO users(UserName, firstName, lastName, email, password, PhoneNumber) VALUES ($UserName,'$firstName', '$lastName', '$email', '$hashed_password','$mobile') ";
	//$stmt1 = $mySQLConnection ->prepare($sqlPopulateTableStatement );
	//$stmt1->bind_param('issiii', $Stock_Number, $License, $Payment_Type,$Customer_ID, $Offer_ID,$Customer_ID);

	// Prepared statement, stage 1: prepare
	if (mysqli_query($mySQLConnection, $sqlPopulateTableStatement)) {
			echo '</br>Step B: Successfully added sample tasks to task table in database.</br>';
		header ("Location: index.php");
	}


?>
