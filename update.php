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

        $query = " update book set tname = '".$tname."', age= '".$age."', sex= '".$sex."', aadhar= '".$aadhar."', pno = '".$pno."', emphno= '".$emphno."', mail= '".$mail."',ticket = '".$ticket."',traveldate = '".$traveldate."',traveltime = '".$traveltime."',bustype = '".$bustype."', pickup= '".$pickup."', destination= '".$destination."',extra = '".$extra."' where aadhar='".$aadhar."'";
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