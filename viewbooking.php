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
 <style type="text/css">
 	label{
 		color:white;
 	}
 </style>
 <style type="text/css" media="print">
 	@media{
 		.dontprint{
 			display:none;
 		}

 		.head{
 			color:white;
 			font-weight: bolder;
 		}
 		input[type=text],input[type=date]{
 			font-size:30px;
 		}
 	}
 </style>
</head>
<body>
	<div class=" d-flex container bg-white text-dark p-2">
	<h3 style="font-style:italic;font-family: arial" class="p-3 text-center text-info dontprint">Local Train <br>Ticketing System</h3>
	<h5 class="dontprint" style="padding:20px;color:blue"><span style="color:black"><i class='fa fa-phone '></i></span>&nbsp;<b>SERVICE HELPLINE CALL US:</b><br><span style="font-size:15px;color:black">0757113550</span></h5>
</div>
<div style="color: white" class="head text-center"><h3>local Train Ticketing System Book Reciept</h3></div>
<div style="background-color:black " class="container dontprint">
	<div style="font-weight: bolder" class="d-flex p-2 text-dark">
		<div class="p-2"><a href="userdash.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
		<div class="p-2"><a href="userprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2"><a href="booking.php"><i class='fa fa-train'></i> BOOK</a></div>
		<div class="p-2 bg-white"><a href="viewbooking.php">YOUR BOOKING</a></div>
		<div class="p-2"><a href="logout.php">lOGOUT</a></div>
		<!--<div class="p-2 text-white"><a style="color:white;text-decoration: none" class='dontprint' href="#" onclick="window.print ();return false;" title="Click to print this page"><i class='fa fa-print'></i> Print this page</a></div>-->
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
$sql="SELECT * FROM bookings WHERE id='$idd'";
 $res=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($res);

 while($row = mysqli_fetch_array($res)) {
 	echo "<table >";
 	echo "<tr>";
 	echo "<th style='padding:10px'>Name</th>";
 	echo "<th style='padding:10px'>Route</th>";
 	echo "<th style='padding:10px'>Date of Travel</th>";
 	echo "<th style='padding:10px'>time of travel</th>";
 	echo "<th style='padding:10px'>Amount to pay</th>";
 	echo "<th style='padding:10px'>view and edit</th>";
 	echo "</tr>";
 	echo "<tr>";
 	echo "<td style='padding:10px'>".$row['fname']."</td>";
 	echo "<td style='padding:10px'>".$row['route']."</td>";
 	echo "<td style='padding:10px'>".$row['bdate']."</td>";
 	echo "<td style='padding:10px'>".$row['dtime']."</td>";
 	echo "<td style='padding:10px'>".$row['amount']."</td>";
 	echo "<td style='padding:10px'><form action='viewb.php' method='POST'><input type='hidden' name='bdate' value='".$row["bookid"]."'><input type='submit' name='submit' value='View more details'></form></td>";
 	echo "<tr>";

 	echo "</table>";

	
}

?>
</div>
<!--<a class='dontprint' href="#" onclick="window.print ();return false;" title="Click to print this page">Print this page</a>-->
</body>
</html>
