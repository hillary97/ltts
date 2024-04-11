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
	<h3 style="padding:20px;color:blue"><span style="color:black"><i class='fa fa-phone'></i></span>&nbsp;<b>contact us</b><br><span style="font-size:15px;color:black">0704702267</span></h3>
	<h5 style="padding:20px;color:blue;position:;right:5px"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Admin Login<img width="20px" width="20px" src="images/next.png">
     </button></h5>
</div>
<div style="background-color:black;padding:20px;color:white;font-weight:bold" class="fluid-container d-flex flex-fill">
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="index.php"><i class='fa fa-home text-warning'></i> HOME</a></div>
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="about.php"><i class="fa fa-address-book text-warning" aria-hidden="true"></i> ABOUT</div>
	<div style="padding:10px"><a style="text-decoration: none;color:white;font-size:" href="contact.php"><i class='fa fa-phone text-warning'></i> CONTACT</a></div>
	<div style="padding:5px" class=""><i class="fa fa-user-o text-warning" aria-hidden="true"></i><button style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#signup">
  USER SIGNUP<img width="20px" width="20px" src="images/next.png">
     </button></div>
	<div style="padding:5px"><i class="fa fa-user-o text-warning" aria-hidden="true"></i> 
		<button style="background-color:black" type="button" class="btn btn- text-white" data-toggle="modal" data-target="#login">
  USER LOGIN ><img width="20px" width="20px" src="images/next.png">
     </button></div>
</div>
	<div style="opacity:;background-blend-mode: ;background-image: url('images/contact.jpg');background-repeat:no-repeat;background-size: 100%;width:100%;height:300px" class="image">
		<div style="background-color:black;opacity:0.7;width:100%;height:300px;background-size: 100%;width:100%">
			<br><br>
			<h1 style="color:white;font-weight: bolder;text-align: center;opacity:1.0">Contact Us</h1><br>
			<p style="text-align:center"><a href="#">Home><span style="color:orange">Contact Us</span></a></p>
		</div>
	</div>
<br><br><br>
<!--user login -->
<div  class="modal fade" id="login">
  <div class="modal-dialog ">
    <div  class="modal-content">

      <!-- Modal body -->
      <div style="height: 300px" class="modal-body ">
        <h2>user login</h2>
        <form class="form-control">
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
<a href="#" onclick="window.print ();return false;" title="Click to print this page">Print this page</a>
</body>
</html>