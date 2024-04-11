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
$phone=$_POST['phone'];
//$pwd=$_POST['pwd'];
$id=$_POST['id'];
$pwd=$id;
$uid=$_POST['uid'];

$sql="UPDATE admins SET fname='$fname',lname='$lname',phone='$phone', password='$pwd',id='$id' WHERE id='$uid'";
$res=mysqli_query($conn,$sql);
if($res){
		echo"<script>alert('Data updated sucessifully ')</script>";
	echo"<script>location.href='index.php'</script>";
}
	else
		{
			echo"<script>alert('Data not updated sucessifully')</script>";
		echo"<script>location.href='userprofile.php'</script>";
		}
?>