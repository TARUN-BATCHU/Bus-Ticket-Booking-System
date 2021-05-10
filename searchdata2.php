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
</html>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `book` WHERE CONCAT(`tname`, `age`, `sex`, `aadhar`, 'pno', 'emphno', 'mail', 'ticket', 'traveldata', 'traveltime','bustype', 'pickup', 'destination', 'extra') LIKE '%".$valueToSearch."%'";

    $search_result = filterTable($query);
    
}
 else {
    // $query = "SELECT * FROM `book`";
    // $search_result = filterTable($query);
    echo "enter your information";
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "travelmanagenment");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="searchdata2.php" method="post">
            <h1>ENTER YOUR ANY INFORMATION HERE</h1>
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            <center>
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

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>

                <tr>
                           <td><?php echo $row['tname'];?></td>
                           <td><?php echo $row['age'];?></td>
                           <td><?php echo $row['sex'];?></td>
                           <td><?php echo $row['aadhar'];?></td>
                           <td><?php echo $row['pno'];?></td>
                           <td><?php echo $row['emphno'];?></td>
                           <td><?php echo $row['mail'];?></td>
                           <td><?php echo $row['ticket'];?></td>
                           <td><?php echo $row['traveldate'];?></td>
                           <td><?php echo $row['traveltime'];?></td>
                           <td><?php echo $row['bustype'];?></td>
                           <td><?php echo $row['pickup'];?></td>
                           <td><?php echo $row['destination'];?></td>
                           <td><?php echo $row['extra'];?></td>
                           <td><a href="edit.php?GetID=<?php echo 222222222 ?>">update</a></td>
                           <td><a href="delete.php?Del=<?php echo 222222222 ?>">Delete</a></td>
<h1>HI THEIR THIS IS YOUR TICKET INFORMATIOM</h1>


                       </tr>
                <?php endwhile;?>
            </table>
            </center>
        </form>

<button onClick="location.href='home.html'" class="login">HOME</button>
        
    </body>
</html>