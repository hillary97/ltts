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
	<h3 style="font-style:italic;" class="p-3 text-center text-dark">Local Train <br>Ticketing System</h3>
	<h3 style="padding:20px;color:blue"><span style="color:black"><i class='fa fa-phone'></i></span>&nbsp;<b>contact us</b><br><span style="font-size:15px;color:black">0757113550</span></h3>
	<h5 style="padding:20px;color:blue;position:;right:5px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Admin Login<img width="20px" width="20px" src="images/next.png">
     </button></h5>
</div>
<div style="background-color:black;padding:20px;color:white;font-weight:bold" class="fluid-container d-flex ">
  <div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="index.php"><i class='fa fa-home text-white'></i> HOME</a></div>
  <div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="about.php"><i class="fa fa-address-book text-white" aria-hidden="true"></i> ABOUT</div>
  <div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="contact.php"><i class='fa fa-phone text-white'></i> CONTACT</a></div>

  <div style="padding:5px" class=""><i class="fa fa-user-o text-white" aria-hidden="true"></i><button style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#signup">
  USER SIGNUP<img width="20px" width="20px" src="images/next.png">
     </button></div>


  <div style="padding:5px" class=""><i class="fa fa-user-o text-white" aria-hidden="true"></i><button id="log" style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#login">
  USER LOGIN<img width="20px" width="20px" src="images/next.png">
     </button></div>
</div>
	<div style="opacity:0.8;background-blend-mode: ;background-image: url('images/t.jpg');background-repeat:no-repeat;background-size: 100%;width:100%;height:200px" class="image">
		<div style="background-color:black;opacity:0.7;width:100%;height:200px;background-size: 100%;width:100%">
			<br><br>
			<h1 style="color:white;font-weight: bolder;text-align: center;opacity:1.0">About Us</h1><br>
			<p style="text-align:center"><a href="#">Home><span style="color:orange">about us</span></a></p>

		</div>
	</div>
<br><br><br>
<div class="content text-center">
	<h2 style="font-family:verdana"><strong>About Us</strong></h2>
	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
	</div>

	<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Welcome Admin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div style="height: 300px" class="modal-body">
        <h2>Admin login</h2>
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
<!-- end of mdal-->

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
        	<input class="form-control" type="number" max-length="10" name="phone" required>
        	<label>Id number</label><br>
        	<input class="form-control" type="number" maxlength="8" name="id" required>
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
      <div style="height: 300px" class="modal-body ">
        <h2>User login</h2>
        <form autocomplete="off" method="POST" action="userlog.php" class="form-control">
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