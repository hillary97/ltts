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
		<div class="p-2"><a href="userprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2 bg-white"><a href="booking.php"><i class='fa fa-train'></i> BOOK</a></div>
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

	echo '<center><form action="bookticket.php" method="POST">First Name:<input readonly style="padding:10px" type="text" name="fname" value="'.$row["fname"].'"><br><br>Second Name<input readonly style="padding:10px" type="text" name="lname" value="'.$row["lname"].'"><br><br> 
		Route:<select style="padding:10px" required name="route">
		<option selected disabled value="">Please select</option>
		<option value="Emali-Athiriver">Emali-Athiriver</option>
		<option value="Athiriver-Emali">Athiriver-Emali</option>
		<option value="Athi-Syokimau">Athi-syokimau</option>
		<option value="Syokimau - athi">Syokimau - Athiriver</option>
		<option value="Matuu-Thika">Matuu-Thika</option>
		<option value="Thika - Matuu">Thika - Matuu</option>
		</select>
		Depature time:<select style="padding:10px" required name="dtime">
		<option selected disabled value="">Please select</option>
		<option value="8">8</option>
		<option value="10">10</option>
		<option value="12">12</option>
		</select>
		Book Date:<input style="padding:10px" type="date" name="bdate" value=date(y-m-d) required>
		<br>
		<ul style="background-color:black;color:white;">
		<li style="padding:10px">emali-athi to and from:      400</li>
		<li style="padding:10px">Athi-syokimau to and from:   300</li>
		<li style="padding:10px">matuu-thika to and from:     300</li>
		</ul>
		<br>
		Amount to pay:<select style="padding:10px" required name="amount">
		<option selected disabled value="">Please select</option>
		<option value="400">400</option>
		<option value="600">300</option>
		</select>
		
<br><br>
	Phone <input readonly style="padding:10px" type="text" name="phone" value="'.$row["phone"].'"><br><br> Password <input style="padding:10px" type="text" name="pwd" readonly value="'.$row["password"].'"><br><br>Id number<input readonly style="padding:10px" type="text" name="id" value="'.$row["id"].'"><center><br><input class="form-control w-25"style="background-color:green;color:white" type="submit" name="book" value="BOOK"></center></form></center>';
}

?>
</div>

</body>
</html>