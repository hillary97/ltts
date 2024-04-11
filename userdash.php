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
<div style="background-color: black;color:white; " class="container">
	<div style="font-weight: bolder" class="d-flex p-2 text-dark">
		<div class="p-2 bg-white"><a href="userdash.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
		<div class="p-2"><a href="userprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2"><a href="booking.php"><i class='fa fa-train'></i> BOOK</a></div>
		<div class="p-2"><a href="viewbooking.php">YOUR BOOKING</a></div>
		<div class="p-2"><a href="logout.php">lOGOUT</a></div>
	</div>
</div>
<!--home image -->
<div style="opacity:0.8;background-repeat:no-repeat;background-image: url('images/home.png');width:100% 100%;height:600px;background-size: 100%">
	<br><br>
	<h1 style="text-align:center;color:white;font-family: verdana;font-weight: bolder">User Dashbooard</h1>
	<h4 style="text-align:center;color:white">User><span style="color:orange">Dashboard</span></h4>
	<br><br>
	<div class="container">
	<div style='opacity:0.7' class="8 bg-danger w-25 text-white">
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
$slotone=100;
$slottwo=100;
$slotthree=100;
$today=date("Y-m-d");
 $sql="SELECT * from bookings where bdate='$today' and dtime=8";
 $res=mysqli_query($conn,$sql);
 $no=mysqli_num_rows($res);
  $slots=$slotone-$no;
echo "<h4 style='color:white;text-align:center;font-weight:bolder'>SLOTS REMAINING AT 8AM ARE :</h4><h2 style='color:white;text-align:center'>".$slots."</h2>";
?>
	</div>
	<div style='opacity:0.7' class="10 bg-success w-50">
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
$slotone=100;
$today=date("Y-m-d");
 $sql="SELECT * from bookings where bdate='$today' and dtime=10";
 $res=mysqli_query($conn,$sql);
 $no=mysqli_num_rows($res);
  $slots=$slotone-$no;
echo "<h4 style='color:black;text-align:center'>SLOTS REMAINING AT 10AM ARE :</h4><h2 style='color:blue;text-align:center'>".$slots."</h2>";

?>
	</div>
	<div style='opacity:0.7' class="12 bg-dark text-white w-75">
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
$slotone=100;
$today=date("Y-m-d");
 $sql="SELECT * from bookings where bdate='$today' and dtime=12";
 $res=mysqli_query($conn,$sql);
 $no=mysqli_num_rows($res);
  $slots=$slotone-$no;
echo "<h4 style='opacity:0.7;color:white;text-align:center'>SLOTS REMAINING AT 12AM ARE :</h4><h2 class='' style='color:orange;text-align:center'>".$slots."</h2>";
 
    	

?>
	</div></div>
</div>
</body>
</html>