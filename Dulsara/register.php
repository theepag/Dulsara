<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  
	<head>
		 <title>Dulsara Restaurant</title>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

				<!--home CSS-->
				<link rel="stylesheet" type="text/css" href="css/home.css" media="screen" />
				<link rel="stylesheet" type="text/css" href="css/style2.css">
			
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		
				  <style> 

				  .error_form{
                color:red;
            }

@font-face {
    font-family: navfont;
    src: url(fonts/BreeSerif-Regular.otf);
    
}
@font-face {
    font-family:domine;
    src: url(fonts/Domine-Regular.ttf);
}

</style>
				
		</head>

			<!--content-->
<body>


	<nav class="navbar navbar-light" style="background-color:#16242D;">
				<!-- Navbar content -->
					<div class="container" style="font-family:navfont; font-color:White;">
						<img src="Images/logo.png" alt="Dulsara logo">
							<div id="navcontent">
								<a class="navbar-brand" style="color:White;" href="home.php">Home</a>
								<a class="navbar-brand" style="color:White;" href="foodss/view.php">Order Now</a>
								<a class="navbar-brand" style="color:White;" href="login.php">Reserve Table</a>
								<a class="navbar-brand" style="color:White;" href="AboutUs.php"> About Us</a>
								<a class="navbar-brand" style="color:White;" href="login.php">Login </a>
							
							</div>
					</div>
			</nav>

			<script>
			function myFun(){
				var charact_way=/^[A-Za-z]+$/;
				var a=document.getElementById("username").value;
				if(a.length<3){
					doctype.getElementById("Message").innerHTML="user name must be above 3 characters";
					return false;
				}
				if(a.length>15){
					document.getElementById("Message").innerHTML="user name must be below 15 characters";
					return false;
				}
				if(a.match(charact_way))
					true;
				else{
					document.getElementById("Message").innerHTML="only alphabats are allowed";
					return false;
				}
			}
			</script>

<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" method="POST" style="padding-top: 25px; margin-bottom: 30px;" onsubmit="return myFun()" >
    <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="fname" id="username" value="">
  	  <span class="error_form" id="Message"> </span>
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lname" id="username" value="">
  	  <span class="error_form" id="Message"> </span>
  	</div>
  	<div class="input-group">
  	  <label>NIC</label>
  	  <input type="text" name="nic"> 
  	  
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $username; ?>" required>
  	  <span class="error_form" id="email_error_message"> </span>
  	</div>

    <div class="input-group">
      <label>Mobile No</label>
			<input type="text" name="mobile" pattern="[0-9]{10}" required>
      <span class="error_form" id="phone_error_message"> </span>
    </div>

    <div class="input-group">
      <label>User Name</label>
      <input type="text" name="username" required value="<?php echo $username; ?>">
      <span class="error_form" id="uname_error_message"> </span>
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" required>
      <span class="error_form" id="pwd_error_message"> </span>
    </div>

    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="password_2" required>
      <span class="error_form" id="cpwd_error_message"> </span>
    </div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user" style="font-size: 20px; padding: 5px 10px; font-weight: bold;">Register</button>


  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

 

			<!-- Footer -->

			<div id="footer">

				<nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  <!--nav bar -->
					<!-- Navbar content -->
					<div class="container">
						<div class="row">
								<div class="col1">
									<img src="Images/logo.png" alt="Dulsara Logo"></br></br>
								</div>
					   
							<div class="col2">
									Dulsara Restaurant
									<address> No. 26, Cocowatte Road,</br>Badulla</address> 
							</div>
							
							<div class="col3">
							055 222 8215 <br>
							Coordinate<br> <a href="https://www.google.com/maps/place/6.9853025,81.058579" target="_blank" style="color:white;"> 6.9853025, 81.058579</a>
							</div>
					   
							<div class="col4">
								<p class="icons">
									<a href="#" class="normaltip" title="Facebook"><img src="Images/icon1.gif" alt=""></a>
									<a href="#" class="normaltip" title="Twitter"><img src="Images/icon3.gif" alt=""></a>
								</p>
						  
										 weekday      7:30 AM – 10:30 PM <br>
										weekend    7:30 AM – 10:30 PM
							</div>
						</div>
					</div>
				</nav>
			</div>
			
		</body>
	</html>