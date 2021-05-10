<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("coonnection failed:" . mysqli_connect_error());
}

    if(isset($_POST['update']))
    {
       $fullname = $_POST['fullname'];
       $age = $_POST['age'];
       $email = $_POST['email'];
       $paswrd = $_POST['paswrd'];
       $phno = $_POST['phno'];
       $dob = $_POST['dob'];

        $query = " update register set fullname = '".$fullname."', age= '".$age."', email= '".$email."', paswrd= '".$paswrd."', phno = '".$phno."', dob= '".$dob."' where email='".$email."'";
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