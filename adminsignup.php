<!DOCTYPE html>
<html>
<head>
	<title>admin signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class=" d-flex container bg-white text-dark p-2">
	<h3 style="font-style:italic;font-family: arial" class="p-3 text-center text-info">Local Train <br>Ticketing System</h3>
	<h5 style="padding:20px;color:blue"><span style="color:black"><i class='fa fa-phone'></i></span>&nbsp;<b>SERVICE HELPLINE CALL US:</b><br><span style="font-size:15px;color:black">0757113550</span></h5>
</div>
<div style="background-color: black;color:white; " class="container">
	<div style="font-weight: bolder" class="d-flex p-2 text-dark">
		<div class="p-2"><a href="admindash.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
		<div class="p-2 bg-white"><a href="adminsignup.php">Admin signup</a></div>
		<div class="p-2 "><a href="admins.php">list of Admins</a></div>
		<div class="p-2"><a href="adminprofile.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> PROFILE</a></div>
		<div class="p-2"><a href="allbookings.php"><i class='fa fa-train'></i> ALLBOOKINGS</a></div>
		<div class="p-2"><a href="allusers.php">ALL USERS</a></div>
		<div class="p-2"><a href="logout.php">lOGOUT</a></div>
	</div>
</div>
<div class=" container bg-dark">
        <h2 class="text-white">Admin signup</h2>
        <form action="adminsign.php" method="POST" class="form-control">
        	<label>First Name</label><br>
        	<input class="form-control" type="text" name="fname" required>
        	<label>Last name Name</label><br>
        	<input class="form-control" type="text" name="lname" required>
        	<label>Phone Number</label><br>
        	<input class="form-control" type="number" max-length=10 name="phone" required>
          <!--<label>Email</label><br>
          <input class="form-control" type="email" name="email" required>-->
        	<label>Id number</label><br>
        	<input class="form-control" type="password" max-length="8" name="id" placeholder="Enter Id Number please" required>
        	<!--<label>Password</label><br>-->
        	<input class="form-control" type="hidden" name="pwd" required><br>
        	<input class="form-control bg-success" type="submit" name="submit">
        </form>
      </div>
</body>
</html>