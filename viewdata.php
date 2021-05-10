<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
    $query = "select * from register ;";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>

    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}


.button1 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
        <center><h1>RECORDS</h1></center>
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Full Name </td>
                                <td> Age </td>
                                <td> Email </td>
                                <td>Password</td>
                                <td>Phone number</td>
                                <td>Date of Birth</td>
                            </tr>

                            <?php 
                                    
                                    
                                 while($row=mysqli_fetch_assoc($result))
                                    {
                                        $fullname = $row['fullname'];
                                        $age = $row['age'];
                                        $email = $row['email'];
                                        $paswrd = $row['paswrd'];
                                        $phno = $row['phno'];
                                        $dob = $row['dob'];
                            ?>

                                   <tr>
                                        <td><?php echo $fullname ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $paswrd ?></td>
                                        <td><?php echo $phno ?></td>
                                        <td><?php echo $dob ?></td>                                      
                                        


                                        <td><a href="editdata.php?GetID=<?php echo $email ?>"><center>update</center></a></td>
                                        <td><a href="deletedata.php?Del=<?php echo $email ?>"><center>Delete</center></a></td>
                                    </tr>        
                            
                                  <?php 
                                    }  
                            ?>     
                                                                                                
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
  
<br><br>
<br><br>
<br><br>
<button onClick="location.href='viewrecords.html'" class="button1"> <== BACK </button>
</body>
</html>