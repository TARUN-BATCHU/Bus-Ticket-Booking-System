<?php 
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "travelmanagenment";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['admin_id']) && isset($_POST['pasword'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $admin_id = validate($_POST['admin_id']);
    $pasword = validate($_POST['pasword']);

    if (empty($admin_id)) {
        header("Location: login2.html?error=User Name is required");
        exit();
    }else if(empty($pasword)){
        header("Location: login2.html?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admins WHERE admin_id='$admin_id' AND pasword='$pasword'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['admin_id'] === $admin_id && $row['pasword'] === $pasword) {

                header("Location: viewrecords.html");
                exit();
            }else{
                echo "wrong";
                // header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            
            header("Location: wrongpass.html?error=Incorect User name or password");
            exit();
        }
    }
    
}else{
    header("Location: login2.html");
    exit();
}