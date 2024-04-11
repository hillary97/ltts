<!DOCTYPE html>
<html>
<head>
	<title>L.T.T.S| Admin Homepage</title>
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
	<h5 style="padding:20px;color:blue;position:;right:5px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Admin Login
     </button></h5>
</div>
<div style="background-color:black;padding:20px;color:white;font-weight:bold" class="fluid-container d-flex ">
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="index.php"><i class='fa fa-home text-white'></i> HOME</a></div>
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="about.php"><i class="fa fa-address-book text-white" aria-hidden="true"></i> ABOUT</div>
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="contact.php"><i class='fa fa-phone text-white'></i> CONTACT</a></div>

	<div style="padding:5px" class=""><i class="fa fa-user-o text-info" aria-hidden="true"></i><button style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#signup">
  USER SIGNUP<img width="20px" width="20px" src="images/next.png">
     </button></div>


	<div style="padding:5px" class=""><i class="fa fa-user-o text-info" aria-hidden="true"></i><button id="log" style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#login">
  USER LOGIN<img width="20px" width="20px" src="images/next.png">
     </button></div>
</div>
	<div style="opacity:;background-image: url('images/cool.jpg');background-repeat:no-repeat;background-size: 100%;width:100%;height:400px" class="image">
		<br><br><br><br>
		<center><h2 style="border:px solid orange;padding:30px;width:40%;background-color: black ;opacity: 0.7;font-family: verdana;font-size: 30px;font-weight: bolder" class="text-white text-center"> welcome to our booking system<br><span style="font-size:20px;color:orange;font-style: italic;">book with the best</span>  </h2><center>
	</div>
<br><br><br>
<div style="text-align:center" class=" container content justify-content-center">
	<h2><strong><span style="font-family:;font-weight:bolder">Book with the best </span></strong>Train transport</h2>
	<p>local train ticketing system helps the user to create an account,book tickets edit profile and print recipt </p>
	</div>



	<!-- The Modal -->
<div  class="modal fade" id="myModal">
  <div class="modal-dialog ">
    <div  class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">welcome admin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div style="height: 300px" class="modal-body ">
        <h2>Admin login</h2>
        <p STYLE="COLOR:RED">use firstname as the USERNAME<br>
         id number as the PASSWORD</p>
        <form method="POST" action="adminlog.php" class="form-control">
        	<label>Username</label><br>
        	<input class="form-control" type="text" name="uname" placeholder="enter your fist-name">
        	<label>Password</label><br>
        	<input class="form-control" type="password" name="pwd">
        	<input class="form-control" type="submit" name="submit">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- end of modal-->



<!-- The signup login Modal -->
<div class="modal fade" id="signup">
  <div class="modal-dialog ">
    <div style="height: 600px ;width:100%" class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">hello there</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h2>User signup</h2>
        <form action="usersignup.php" method="POST" class="form-control">
        	<label>First Name</label><br>
        	<input class="form-control" type="text" name="fname" required>
        	<label>Last name Name</label><br>
        	<input class="form-control" type="text" name="lname" required>
        	<label>Phone Number</label><br>
        	<input class="form-control" type="number" max-length=10 name="phone" required>
          <!--<label>Email</label><br>
          <input class="form-control" type="email" name="email" required>-->
        	<label>Id number</label><br>
        	<input class="form-control" type="password" max-length="8" name="id" placeholder="Enter Id Number please" autocomplete="off" required>
        	<!--<label>Password</label><br>-->
        	<input class="form-control" type="hidden" name="pwd" required><br>
        	<input class="form-control bg-success" type="submit" name="submit">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- end of mdal-->



<!--user login -->
<div  class="modal fade" id="login">
  <div class="modal-dialog ">
    <div  class="modal-content">

      <!-- Modal body -->
      <br>
      <h5 style="text-align:center;font-style: italic;color:red">Use firstname for username<br> and IdNO for password</h5>
      <div style="height: 300px" class="modal-body ">
        <h2>User login</h2>
        <form autocomplete="off" method="POST" action="userlog.php" class="form-control">
        	<label>Username</label><br>
        	<input class="form-control" type="text" name="uname" placeholder="enter your first-name">
        	<label>Password</label><br>
        	<input class="form-control" type="password" name="pwd">
        	<input class="form-control" type="submit" name="submit">
        </form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- end of user login modal-->
<div style="width:100%;height: 400px" class="footer flex-column bg-dark">
  <div class="container text-white text-center">
    <br>
    <h3>Our Links</h3>
  <a style="font-size:20px;color:orange" href="index.php">Home </a><br><br>
  <a style="font-size:20px;color:orange" href="about.php">About </a><br><br>
  <a style="font-size:20px;color:orange" href="contact.php">Contact </a>
</div>
</div>
<div style="padding:20px;text-align:center;color:white;background-color:black" class="copyright">
  <p>Copyright © 2022 Local Train ticketing System. All Rights Reserved</p>
</div>
</body>
</html>