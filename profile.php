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
$sql="SELECT * FROM admins WHERE id='$idd'";
 $res=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($res);

 while($row = mysqli_fetch_array($res)) {
	echo '<center><form action="adminprofileedit.php" method="POST">First Name:<input style="padding:10px" type="text" name="fname" value="'.$row["fname"].'"><br><br>Second Name<input style="padding:10px" type="text" name="lname" value="'.$row["lname"].'"><br><br> Phone <input style="padding:10px" type="text" name="phone" value="'.$row["phone"].'"><br><br> Password <input style="padding:10px" type="text" name="pwd" disabled  value="'.$row["password"].'"><br><br>Id number<input style="padding:10px" type="number" name="id" value="'.$row["id"].'"><input style="padding:10px" type="hidden" name="uid" value="'.$row["id"].'"><center><input class="form-control bg-success" style="background-color:;color:white" type="submit" name="edit" value="edit"></center></form></center>';
}

?>