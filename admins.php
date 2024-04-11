<!DOCTYPE html>
<html>
<head>
	<title>Admin dashboard</title>
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
<div style="background-color: black;color:white; " class="container">
	<div style="font-weight: bolder" class="d-flex p-2 text-dark">
		<div class="p-2 "><a href="admindash.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
		<div class="p-2 "><a href="adminsignup.php">Admin signup</a></div>
		<div class="p-2 bg-white"><a href="admins.php">list of Admins</a></div>
		<div class="p-2"><a href="adminprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2"><a href="allbookings.php"><i class='fa fa-train'></i> ALLBOOKINGS</a></div>
		<div class="p-2 "><a href="allusers.php">ALL USERS</a></div>
		<div class="p-2"><a href="logout.php">lOGOUT</a></div>
	</div>
</div>
	<div class="container bg-info p-2">
<!--user details -->
<table>
	<tr>
	<th style='padding:10px'>First name</th>
	<th style='padding:10px'>last name</th>
	<th style='padding:10px'>Phone number</th>
	<th style='padding:10px'>ID number</th>
	<th style='padding:10px;color:red'>delete</th>
</tr>
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
//$idd=$_SESSION['id'];
$sql="SELECT * FROM admins";
 $res=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($res);

 while($row = mysqli_fetch_array($res))
  {
 	
 	echo "<tr>";
 	echo "<td style='padding:10px'>".$row['fname']."</td>";
 	echo "<td style='padding:10px'>".$row['lname']."</td>";
 	echo "<td style='padding:10px'>".$row['phone']."</td>";
 	echo "<td style='padding:10px'>".$row['id']."</td>";
 	echo "<td style='padding:10px'><form action='deluser.php' method='POST'><input type='hidden' name='idnumber' value='".$row["id"]."'><input type='submit' name='submit' value='Delete user'></form></td>";
 	echo "<tr>";	
}

?>
</table>
</div>
</body>
</html>