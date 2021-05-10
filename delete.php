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
            $aadhar = $_GET['Del'];
             $query = "DELETE FROM book where aadhar = '".$aadhar."'";
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