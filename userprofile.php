<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>L.T.T.S | User dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class=" d-flex container bg-white text-dark p-2">
	<h3 style="font-style:italic;font-family: arial" class="p-3 text-center text-info">Local Train <br>Ticketing System</h3>
	<h5 style="padding:20px;color:blue"><span style="color:black"><i class='fa fa-phone'></i></span>&nbsp;<b>SERVICE HELPLINE CALL US:</b><br><span style="font-size:15px;color:black">0757113550</span></h5>
</div>
<div style="background-color:black " class="container">
	<div style="font-weight: bolder" class="d-flex p-2 text-dark">
		<div class="p-2"><a href="userdash.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
		<div class="p-2 bg-white"><a href="userprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2"><a href="booking.php"><i class='fa fa-train'></i> BOOK</a></div>
		<div class="p-2"><a href="viewbooking.php">YOUR BOOKING</a></div>
		<div class="p-2"><a href="logout.php">lOGOUT</a></div>
	</div>
</div>
<div class="container bg-info p-2">
<!--user details -->
<?php

$server="localhost";
$username="root";
$password="";
$database="ltts";
$conn=mysqli_connect($server,$username,$password,$database);

if($conn){
	//echo 'connection success';

}
else{
	echo "not connected";
}
$idd=$_SESSION['id'];
$sql="SELECT * FROM users WHERE id='$idd'";
 $res=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($res);

 while($row = mysqli_fetch_array($res)) {
	echo '<center><form action="userprofileedit.php" method="POST">First Name:<input style="padding:10px" type="text" name="fname" value="'.$row["fname"].'"><br><br>Second Name<input style="padding:10px" type="text" name="lname" value="'.$row["lname"].'"><br><br> Phone <input style="padding:10px" type="text" name="phone" value="'.$row["phone"].'"><br><br> Password <input style="padding:10px" type="text" name="pwd" disabled  value="'.$row["password"].'"><br><br>Id number<input style="padding:10px" type="number" name="id" value="'.$row["id"].'"><input style="padding:10px" type="hidden" name="uid" value="'.$row["id"].'"><center><input class="form-control bg-success" style="background-color:;color:white" type="submit" name="edit" value="edit"></center></form></center>';
}

?>
</div>

</body>
</html>