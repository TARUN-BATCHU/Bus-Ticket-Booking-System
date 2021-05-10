<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("coonnection failed:" . mysqli_connect_error());
}

    if(isset($_POST['submit']))
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

        $query = " SELECT * from  where aadhar='".$aadhar."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
</head>
<body>

<h1>ENTER YOUR AADHAR NUMBER</h1>

<!-- <form method=post action="/view2.php"> -->
  
  <label for="aadhar">AADHAR NUMBER:</label>
  <input type="number" id="aadhar" name="aadhar"><br><br>
  <!-- <input type="submit" value="Submit"> -->
  <a href="view2.php?GetID=<?php echo $aadhar ?>">submit</a>
<!-- </form> -->



</body>
</html>
