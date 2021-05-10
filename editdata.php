<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("coonnection failed:" . mysqli_connect_error());
}
    $email = $_GET['GetID'];
    $query = " select * from register where email='".$email."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        
       $fullname = $row['fullname'];
       $age = $row['age'];
       $email = $row['email'];
       $paswrd = $row['paswrd'];
       $phno = $row['phno'];
       $dob = $row['dob'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editdata</title>

<style>
input[type=text], 
select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 24px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <center><h1 class="bg-success text-white text-center py-3"> Update User Data here</h3></center>
                        </div>
                        <div class="card-body">
                             <center>
                            <form action="updatedata.php?ID=<?php echo     $email ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Full Name " name="fullname" value="<?php echo $fullname ?>"><br><br>

                                <input type="number" name="age" value="<?php echo $age ?>"><br><br>


                                 <input type="text" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $email ?>"><br><br>
                                
                                <input type="text" class="form-control mb-2" placeholder=" paswrd" name="paswrd" value="<?php echo $paswrd ?>"><br><br>
                                <input type="number" name="phno" value="<?php echo $phno ?>"><br><br>
                                <input type="date" class="form-control mb-2" placeholder=" dob" name="dob" value="<?php echo $dob ?>"><br><br>
                                
                                <center><button class="btn btn-primary" name="update">Update</button></center>
                            </form>
                             </center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>