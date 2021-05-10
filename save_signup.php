<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
	die("coonnection failed:" . mysqli_connect_error());
}

if (isset($_POST['save']))
{
	$fullname = $_POST['fullname'];
	$age = $_POST['age'];
    $email = $_POST['email'];
    $paswrd = $_POST['paswrd'];
    $repaswrd = $_POST['repaswrd'];
    $phno = $_POST['phno'];
    $dob = $_POST['dob'];



	$sql_query = "INSERT INTO register (fullname, age, email, paswrd, repaswrd, phno, dob) VALUES ('$fullname', '$age', '$email', '$paswrd', '$repaswrd', '$phno', '$dob')";

	if (mysqli_query($conn, $sql_query)){
		// echo "successfull";
		header('Location:login.html');


	}
	else{
		echo "<center><h1>You already have a account you can login</h1></center>";
		echo " ";
		echo " ";
		echo " ";
		echo "error: " . $sql . "" . mysqli_error($conn);

	}
	mysqli_close($conn);
}
?>