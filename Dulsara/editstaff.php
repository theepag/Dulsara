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

					<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

					<!--java script-->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

						 <!-- Optional JavaScript -->
					<!-- jQuery first, then Popper.js, then Bootstrap JS -->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

		<style>
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

		<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
		  <!-- Navbar content -->
			   <div class="container" style="font-family:navfont; font-color:White;">
					<img src="Images/logo.png" alt="Dulsara logo">
					<div id="navcontent">
						<a class="navbar-brand" style="color:White;" href="admin_home.php">Meals</a>
						<a class="navbar-brand" style="color:White;" href="orders.php">Orders</a>
                          <a class="navbar-brand" style="color:White;" href="view_reservations.php">Reservations Details</a>
                          <a class="navbar-brand" style="color:White;"href="Customer.php"> Customer</a>
                          <a class="navbar-brand" style="color:White;"href="feedback.php">Feedbacks</a>
                          <a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
                          <a class="navbar-brand" href="login.php" style="color:White;">logout</a>
						<img src="Images/user.png" style="padding-top:px;">
					</div>
				</div>
		</nav>


						<div class="row">

							<!--<div style="margin-left:12%;">-->
								<div  class="col-3"></div>
									<!--<div class="container" style="padding-top:50px">-->
										<div  class="col-7">

													<div class="w3-card-4 w3-col s12 w3-margin" style ="padding:50px">
														<div class="w3-container w3-padding ">
														<!--<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="" style="width:15%">&nbsp;&nbsp;</i> Meal List </div>-->
															<div class="row w3-margin w3-xxlarge " style="font-family:navfont;><img src="" style="width:21%; height:20%">&nbsp;</i>Add Staff </div>
														</div>

															<form   id="staff-add" method="post" action="includes/editstaffs.inc.php" enctype="multipart/form-data">
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="fname" type="text" placeholder=" First name" required="required">
																</div>
																<div class=" w3-padding">
																	<input class="w3-input w3-border" name="lname" type="text" placeholder="Last name" required="required">
																</div>
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="email" type="email" placeholder="Email" required="required">
																</div>
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="mobile" type="number" placeholder="Mobile" required="required">
																</div>
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="salary" type="text" placeholder="Salary" required="required" >
																</div>

																<div class="w3-padding">
																	<input class="w3-input w3-border" name="nic" type="text" placeholder="NIC" required="required">
																</div>
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="username" type="text" placeholder="Username" required="required">
																</div>
																<div class="w3-padding">
																	<input class="w3-input w3-border" name="password" type="password" placeholder="Password" required="required" >
																</div>
																<div class="w3-padding">
																	<label> User type
																		<select name="type">
																		  <option value="primary">Primary Staff</option>
                                                                          <option value="table">Table Reservation Staff</option>
                                                                          <option value="delivery">Delivery Staff</option>

                                                                    </select>

																	</label>
																</div>

																<div class="w3-padding">
																	<button class="btn w3-green" name="staff-add" type="submit" style="">Add Staff Member</button>
																</div>


															</form>

													</div>
												</div>
											</div>

								</div>

					<!--end my coding-->


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






