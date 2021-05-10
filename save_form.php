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
	$tname = $_POST['tname'];
	$age = $_POST['age'];
    $sex = $_POST['sex'];
    $aadhar = $_POST['aadhar'];
    $pno = $_POST['pno'];
    $emphno = $_POST['emphno'];
    $mail = $_POST['mail'];
    $ticket = $_POST['ticket'];
    $traveldate =$_POST['traveldate'];
    $traveltime = $_POST['traveltime'];
    $bustype = $_POST['bustype'];
    $pickup = $_POST['pickup'];
    $destination = $_POST['destination'];
    $extra = $_POST['extra'];


	$sql_query = "INSERT INTO book (tname, age, sex, aadhar, pno, emphno, mail, ticket, traveldate, traveltime, bustype, pickup, destination, extra) VALUES ('$tname', '$age', '$sex', '$aadhar', '$pno', '$emphno', '$mail', '$ticket', '$traveldate', '$traveltime', '$bustype', '$pickup', '$destination', '$extra')";

	if (mysqli_query($conn, $sql_query)){
		// echo "successfull";
                header("location:thanks.html");
          


	}
	else{
		echo "error: " . $sql_query . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>