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
if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$password=$_POST['pwd'];

    $sql="SELECT * from users where fname='$username' and password='$password' ";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) {
    	while($row = mysqli_fetch_array($res)) {
    	session_start();
    	$_SESSION['name']=$row['fname'];
    	$_SESSION['id']=$row['id'];
    	header("location:userdash.php");

    }

    }
    else{
    	echo "<script>alert('username or password incorrect')</script>";
 		echo "<script>location.href='index.php'</script>";
    }
    
}
?>