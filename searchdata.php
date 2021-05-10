
<html>


<head>
    <title>search data by its Id</title>
    <style>
    body{
      background-color: grey;
}
table,th,td{
   border: 2px solid black;
   width: 1100px;
   background-color:lightgreen;
}
.btn{
    width:10%;
    height:5%;
    font-size=22px;
    padding:0px;
}
   </style>
     

</head>
<body>
     <center>
       
        
       <div class="container">
         <form action="" method="POST">
              <input type="text" name="id" class="btn" placeholder="Enter traveller /Aadhar"/>
              <input type="submit" name="search" class="btn" value="SEARCH BY ID">
         </form>
         <table> 
                  <tr>
                     <th> Traveller Name </th>
                     <th> Age </th>
                     <th> Sex </th>
                     <th> Aadhar </th>
                     <th> Phone number </th>
                     <th> emergency </th>
                     <th> Mail ID </th>
                     <th> No.of tickets </th>
                     <th> Travel date </th>
                     <th> Travel time </th>
                     <th> BUS type </th>
                     <th> Pickup </th>
                     <th> Destination </th>
                     <th> Extra </th>
                  </tr> <br>

                 <?php
                 $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $db = "travelmanagenment";

                  $conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
                 
                 if(isset($_POST['search']))
                 {


    //               $tname = $_POST['tname'];
    //              $age = $_POST['age'];
    // $sex = $_POST['sex'];
    // $aadhar = $_POST['aadhar'];
    // $pno = $_POST['pno'];
    // $emphno = $_POST['emphno'];
    // $mail = $_POST['mail'];
    // $ticket = $_POST['ticket'];
    // $traveldate =$_POST['traveldate'];
    // $traveltime = $_POST['traveltime'];
    // $bustype = $_POST['bustype'];
    // $pickup = $_POST['pickup'];
    // $destination = $_POST['destination'];
    // $extra = $_POST['extra'];


                   $id=$_POST['search'];
                   $query ="SELECT * FROM book where aadhar='$id' ";
                   $query_run= mysqli_query($conn,$query); 
                   
                   while($row=mysqli_fetch_array($query_run))
                   {
                       ?> 
                       <tr>
                           <td> <?php echo $row['tname']; ?> </td>
                           <td> <?php echo $row['age']; ?> </td>
                           <td> <?php echo $row['sex']; ?> </td>
                           <td> <?php echo $row['aadhar']; ?> </td>
                           <td> <?php echo $row['pno']; ?> </td>
                           <td> <?php echo $row['empno']; ?> </td>
                           <td> <?php echo $row['mail']; ?> </td>
                           <td> <?php echo $row['ticket']; ?> </td>
                           <td> <?php echo $row['traveldate']; ?> </td>
                           <td> <?php echo $row['bustype']; ?> </td>
                           <td> <?php echo $row['pickup']; ?> </td>
                           <td> <?php echo $row['destination']; ?> </td>
                           <td> <?php echo $row['extra']; ?> </td>



                       </tr>
                       <?php
                   }
                 }
                 ?>
         </table>
         </div>

     </center>
</body>
</html>