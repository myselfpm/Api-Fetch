<?php
include_once("Connection.php");
if (isset($_POST)) {

	$user_detail=$_POST;
	$name=$user_detail['full_name'];
	$email=$user_detail['email'];
	$age=$user_detail['Age'];
	$message=$user_detail['message'];
$result = mysqli_query($conn, "INSERT INTO user_details(Name, Email, Age, Message) VALUES('$name','$email','$age', '$message')");


}


?>