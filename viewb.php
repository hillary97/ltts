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
$tdate=$_POST['bdate'];
$sql="SELECT * FROM bookings WHERE bookid='$tdate'";
 $res=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($res);

 while($row = mysqli_fetch_array($res)) {
	//echo '<center><form action="#" method="POST">First Name:<input style="padding:10px" type="text" name="fname" value="'.$row["fname"].'">Second Name<input style="padding:10px" type="text" name="lname" value="'.$row["lname"].'"> Phone <input style="padding:10px" type="text" name="phone" value="'.$row["phone"].'"> Password <input style="padding:10px" type="text" name="pwd" disabled value="'.$row["password"].'">Id number<input style="padding:10px" type="text" name="id" value="'.$row["id"].'"><center><input style="background-color:green;color:white" type="submit" name="edit" value="edit"></center></form></center>';
	echo '<h2 style="text-align:center">Local Train Ticketing System Reciept</h2>';
	echo '<br><center><form action="#" method="POST">First Name:<input readonly style="padding:10px" type="text" name="fname" value="'.$row["fname"].'">&nbsp;&nbsp;&nbsp;&nbsp;Second Name<input readonly style="padding:10px" type="text" name="lname" value="'.$row["lname"].'"><br><br> 
		Route:<input readonly style="padding:10px" type="text" name="fname" value="'.$row["route"].'">&nbsp;&nbsp;&nbsp;&nbsp;
		Depature time:<input readonly style="padding:10px" type="text" name="fname" value="'.$row["dtime"].'">&nbsp;&nbsp;&nbsp;&nbsp;
		Book Date:<input style="padding:10px" type="date" name="bdate" value="'.$row["bdate"].'" required><br><br>
		Amount to pay:<input style="padding:10px" type="text" name="amount" value= "'.$row["amount"].'" required>
&nbsp;&nbsp;&nbsp;&nbsp;
	Phone <input readonly style="padding:10px" type="text" name="phone" value="'.$row["phone"].'">&nbsp;&nbsp;&nbsp;&nbsp;Password <input style="padding:10px" type="text" name="pwd" readonly value="'.$row["password"].'">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>Id number<input readonly style="padding:10px" type="text" name="id" value="'.$row["id"].'"></form></center>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css" media="print">
 	@media{
 		.dontprint{
 			display:none;
 		}

 	}
 </style>
</head>
<body>
	<center>
<div class="p-2 text-black bg-info"><button class=" dontprint btn-dark text-white"><a style="color:black;text-decoration: none" class='dontprint' href="#" onclick="window.print ();return false;" title="Click to print this page"><i class='fa fa-print'></i> Print this page</a></button></div></center>
</body>
</html>