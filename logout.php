<?php
session_start();
if(isset($_SESSION['id'])){
	unset($_SESSION['id']);
	session_destroy();
	echo "<script>location.href='index.php#log'</script>";
	echo "<script>windo.open('index.php#log')</script>";
}
else{
	echo"<script>location.href='index.php'</script>";
}
?>