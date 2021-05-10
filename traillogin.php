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

if (isset($_POST['email']) && isset($_POST['paswrd'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $paswrd = validate($_POST['paswrd']);

    if (empty($email)) {
        header("Location: login.html?error=User Name is required");
        exit();
    }else if(empty($paswrd)){
        header("Location: login.html?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM register WHERE email='$email' AND paswrd='$paswrd'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['paswrd'] === $paswrd) {
                // $_SESSION['email'] = $row['email'];
                // $_SESSION['fullname'] = $row['fullname'];
                header("Location: home.html");
                exit();
            }else{
                echo "wrong";
                // header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            
            header("Location: wrongpass2.html?error=Incorect User name or password");
            exit();
        }
    }
    
}else{
    header("Location: login.html");
    exit();
}