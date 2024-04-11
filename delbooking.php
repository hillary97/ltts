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
$sql="DELETE FROM bookings WHERE bookid='$tdate'";
 $res=mysqli_query($conn,$sql);
 if($res){
 	echo"<script>alert('Data deleted sucessifully ')</script>";
	echo"<script>location.href='allbookings.php'</script>";
 }
 ?>