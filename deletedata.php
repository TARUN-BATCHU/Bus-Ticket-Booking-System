<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("coonnection failed:" . mysqli_connect_error());
}


if(isset($_GET['Del']))
         {
            $email = $_GET['Del'];
             $query = "DELETE FROM register where email = '".$email."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:viewdata.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:viewdata.php");
         }
?>