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

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['phone'];
$id=$_POST['id'];
$pwd=$id;

$sql="INSERT INTO admins(fname,lname,phone,password,id) values('$fname','$lname','$contact','$pwd','$id')";
$res=mysqli_query($conn,$sql);
if($res){
		echo"<script>alert('admin added sucessifully. ')</script>";
	echo"<script>location.href='adminsignup.php'</script>";}
	else
		{
			echo"<script>alert('Data not inserted sucessifully.Account not created')</script>";
		echo"<script>location.href='index.php'</script>";
		}
?>