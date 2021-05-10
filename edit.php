<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "travelmanagenment";

$conn = new mysqli($servername, $username, $password, $db) or die("Unable to die");
if(!$conn){
    die("coonnection failed:" . mysqli_connect_error());
}
    $aadhar = $_GET['GetID'];
    $query = " select * from book where aadhar='".$aadhar."'";
    $result = mysqli_query($conn,$query);

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
        $traveldate =$row['traveldate'];
        $traveltime = $row['traveltime'];
        $bustype = $row['bustype'];
        $pickup = $row['pickup'];
        $destination = $row['destination'];
        $extra = $row['extra'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>edit</title>

<style>
/*input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
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
}*/

body{
  background: #fec107;
  padding: 0;
}
.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #fec107;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #fec107;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #ffd658;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

</style>
</head>
<body >
    <form action="update.php?ID=<?php echo $aadhar ?>" method="post">
    <div class="wrapper">
        <div class="title">
            TICKET EDITING
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Name of Traveller</label>
                <input type="text" class="input" name="tname" value="<?php echo $tname ?>">
            </div>  
            <div class="inputfield">
                <label>Age</label>
                <input type="number" class="input" name="age" value="<?php echo $age ?>">
            </div>  
            <div class="inputfield">
                <label>Gender</label>
                <div class="custom_select">
                    <select name="sex" value="<?php echo $sex ?>">
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div> 
       
            <div class="inputfield">
                <label>Aadhar Number</label>
                <input type="number" class="input" name="aadhar" value="<?php echo $aadhar ?>">
            </div>  
       
            <div class="inputfield">
                <label>Phone Number</label>
                <input type="number" class="input" name="pno" value="<?php echo $pno ?>">
            </div> 
            
            <div class="inputfield">
                <label>Emergency Number</label>
                <input type="number" class="input" name="emphno" value="<?php echo $emphno ?>">
            </div> 
        
            <div class="inputfield">
                <label>Email Address</label>
                <input type="email" class="input" name="mail" value="<?php echo $mail ?>">
            </div> 

            <div class="inputfield">
                <label>no.of Tickets (Max 10 allowed)</label>
                <input type="number" class="input" name="ticket" value="<?php echo $ticket ?>">
            </div> 
       
            <div class= "inputfield">
                <label>Date of travel (date):</label>
                <input type="date"  name="traveldate"  value="<?php echo $traveldate ?>">
            </div>

       <div class="inputfield">
          <label>Time of travel</label>
          <div class="custom_select">
            <select name="traveltime" value="<?php echo $traveltime ?>">
              <option>select</option>
              <option>8.30 AM</option>
              <option>10.30 AM</option>
              <option>1 PM</option>
              <option>3.45 PM</option>
              <option>5.15 PM</option>
              <option>7 PM</option>
              <option>9 PM</option>
              <option>12.45 AM</option>
            </select>
          </div>
       </div> 


       <div class="inputfield">
          <label>TYPE OF BUS</label>
          <div class="custom_select">
            <select name="bustype" value="<?php echo $bustype ?>">
              <option>select</option>
              <option>AC</option>
              <option>NON-AC</option>
              <option>AC SLEEPER</option>
              <option>NON-AC SLEEPER</option>
              <option>AC SEMI-SLEEPER</option>
              <option>NON-AC SEMI-SLEEPER</option>
              <option>SUPER FAST</option>
              <option>LUXURY</option>
            </select>
          </div>
       </div> 
       
       <div class="inputfield">
          <label>Pick up</label>
          <div class="custom_select" value="<?php echo $pickup ?>">
            <select name="pickup">
              <option>select</option>
              <option>VIJAYAWADA</option>
              <option>AMARAVATHI</option>
              <option>GUNTUR</option>
              <option>VISAKAPATNAM</option>
              <option>KARNOOL</option>
              <option>PARAKSAM</option>
              <option>HYDERBAD</option>
              <option>NELLORE</option>
              <option>KADAPA</option>
              <option>ELURU</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Destination</label>
          <div class="custom_select">
            <select name="destination" value="<?php echo $destination?>">
              <option>select</option>
              <option>VIJAYAWADA</option>
              <option>AMARAVATHI</option>
              <option>GUNTUR</option>
              <option>VISAKAPATNAM</option>
              <option>KARNOOL</option>
              <option>PARAKSAM</option>
              <option>HYDERBAD</option>
              <option>NELLORE</option>
              <option>KADAPA</option>
              <option>ELURU</option>
            </select>
          </div>
       </div>

        <div class="inputfield">
          <label>Any Amenities</label>
          <input type="text" class="textarea" name="extra" value="<?php echo $extra ?>">
        </div> 
        <div class="inputfield">
            <input type="submit" value="Update" class="btn" name="update">
        </div>
    </div>
</div>
</form>






    
</body>
</html>