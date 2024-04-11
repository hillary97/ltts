<?php
session_start();
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


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$route=$_POST['route'];
$depaturetime=$_POST['dtime'];
$bookdate=$_POST['bdate'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$id=$_POST['id'];


$sql="INSERT INTO bookings(fname,lname,route,dtime,bdate,amount,phone,password,id) VALUES('$fname','$lname','$route','$depaturetime','$bookdate','$amount','$phone','$pwd','$id')";
$res=mysqli_query($conn,$sql);
if($res){
		echo"<script>alert('Data inserted sucessifully ')</script>";
	echo"<script>location.href='booking.php'</script>";
}
	else
		{
			echo"<script>alert('Data not inserted sucessifully')</script>";
		echo"<script>location.href='booking.php'</script>";
		}
?>