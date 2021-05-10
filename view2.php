<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}
    // $query = "select * from book where ;";
    // $result = mysqli_query($conn,$query);
    // save -> thanks..page (go to home page , update ticket) ->update -> give aadhar nuber -> view page




if(isset($_GET['GetID']))
         {
            $aadhar = $_GET['GetID'];
             $query = "SELECT * FROM book where aadhar = '".$aadhar."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:view2.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view2.php");
         }





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
                                <td> Traveller Name </td>
                                <td> Age </td>
                                <td> Gender </td>
                                <td> Aadhar </td>
                                <td> Phno </td>
                                <td> Emergency </td>
                                <td> Email </td>
                                <td>no.of Tickets</td>
                                <td>travel Date</td>
                                <td>Travel Time</td>
                                <td> BUS </td>
                                <td> Pickup </td>
                                <td> Destination </td>
                                <td> Amenities </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    
                                 while($row=mysqli_fetch_assoc($result))
                                    {
                                        $tname = $row['tname'];
                                        $age = $row['age'];
                                        $sex = $row['sex'];
                                        $aadhar = $row['aadhar'];
                                        $pno = $row['pno'];
                                        $emphno = $row['emphno'];
                                        $mail = $row['mail'];
                                        $ticket = $row['ticket'];
                                        $traveldate=$row['traveldate'];
                                        $traveltime=$row['traveltime'];
                                        $bustype = $row['bustype'];
                                        $pickup = $row['pickup'];
                                        $destination = $row['destination'];
                                        $extra = $row['extra'];
                            ?>

                                   <tr>
                                        <td><?php echo $tname ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $sex ?></td>
                                        <td><?php echo $aadhar ?></td>
                                        <td><?php echo $pno ?></td>
                                        <td><?php echo $emphno ?></td>
                                        <td><?php echo $mail ?></td>
                                        <td><?php echo $ticket ?></td>
                                        <td><?php echo $traveldate ?></td>
                                        <td><?php echo $traveltime ?></td>
                                        <td><?php echo $bustype ?></td>
                                        <td><?php echo $pickup ?></td>
                                        <td><?php echo $destination ?></td>
                                        <td><?php echo $extra ?></td>
                                        
                                        
                                        <td><a href="edit.php?GetID=<?php echo $aadhar ?>">update</a></td>
                                        <td><a href="delete.php?Del=<?php echo $aadhar ?>">Delete</a></td>
                                    </tr>        
                            
                                  <?php 
                                    }  
                            ?>     
                                                                                                
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>