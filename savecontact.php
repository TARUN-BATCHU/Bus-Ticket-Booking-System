<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
	die("coonnection failed:" . mysqli_connect_error());
}

if (isset($_POST['send']))
{
	$name = $_POST['name']  ?? "";
    $gmail = $_POST['gmail'] ?? "";
    $num = $_POST['num'] ?? "";
    $message = $_POST['message'] ?? "";


	$sql_query = "INSERT INTO contact (name, gmail, num, message) VALUES ('$name', '$gmail', '$num', '$message')";

	if (mysqli_query($conn, $sql_query)){
		 // echo "successfull";
         header("location:thankscontact.html");
          


	}
	else{
		echo "error: " . $sql_query . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>