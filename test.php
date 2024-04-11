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
 $sql="SELECT * FROM bookings WHERE bdate='$today' ";
 $res=mysqli_query($conn,$sql);
 $no=mysqli_num_rows($res);


echo $today;
echo $no;
//echo "<h1 style='color:blue'>SLOTS REMAINING AT 10AM ARE :</h1><h2 style='color:red;text-align:center'>".$slots."</h2>";
 
    	

?>