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
$idn=$_POST['idnumber'];
$sql="DELETE FROM users WHERE id='$idn'";
 $res=mysqli_query($conn,$sql);
 if($res){
 	echo"<script>alert('User deleted sucessifully ')</script>";
	echo"<script>location.href='allusers.php'</script>";
 }
 ?>