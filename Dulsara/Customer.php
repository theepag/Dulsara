<?php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:./login.php");
}
?>
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
			
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
	<body>

		<img src="Images/admin_bk2.jpg" style="width:1550px;" alt="background-image">

		<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
		  <!-- Navbar content -->
			   <div class="container" style="font-family:navfont; font-color:White;">
					
					<div id="navcontent">
						<a class="navbar-brand" style="color:White;" href="admin_home.php">Meals</a>
                          <a class="navbar-brand" style="color:White;" href="orders.php">Orders</a>
                          <a class="navbar-brand" style="color:White;" href="view_reservations.php">Reservations Details</a>
                          <a class="navbar-brand" style="color:White;"href="Customer.php"> Customer</a>
                          <a class="navbar-brand" style="color:White;"href="feedback.php">Feedbacks</a>
                          <a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
                          <img src="Images/user.png" style="padding-top:5px;">
                          <a class="navbar-brand" href="logout.php" style="color:White;">logout</a>
                          
					</div>
				</div>
		</nav>

		<div class="w3-container w3-padding ">
			
		</div>
		
			<div class="w3-container w3">
				<!--searching bar-->	
				<div class="row " >
					
						<div class="col-sm-6 "style="">
							<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<div class="col-sm-3 ">
									<input class="form-control"  name="keyname" type="text" placeholder="Keyword" id="meal_name">	
								</div >
								<div class="col-sm-3 ">
									<input class="btn btn-dark" type="submit" value="Search" name="submit">

								</div>
								

							</form>
						</div>
						
						</div>


				</div>
															
				
						
				
				<div id="result"></div>
					<div class="row  w3-margin" >
						<table class="table table-striped table-bordered" id="example">
							<thead>
								<tr class="w3-light-grey">
									<th>ID</th>
									<th>First name</th>
									<th>Last name</th>
									<th>Username</th>
									<th>NIC</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Activation Status</th>
									<th>Action</th>
								</tr>
							</thead>

																										
							<tbody>
								
								<?php 
											if(isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM customer WHERE cus_fname LIKE '%{$_POST["keyname"]}%' OR cus_lname LIKE '%{$_POST["keyname"]}%' OR username LIKE '%{$_POST["keyname"]}%' OR nic LIKE '%{$_POST["keyname"]}%' OR email LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['cus_id'];  echo "</td>";
														  echo "<td>"; echo $row['cus_fname'];  echo "</td>";
														  echo "<td>"; echo $row['cus_lname'];  echo "</td>";
														  echo "<td>"; echo $row['username'];  echo "</td>";
														  echo "<td>"; echo $row['nic'];  echo "</td>";
														    echo "<td>"; echo $row['email'];  echo "</td>";
														     echo "<td>"; echo $row['mobile'];  echo "</td>";

														     echo "<td>"; echo $row['status'];  echo "</td>";

														     if($row['status']== true) {

														     	echo "<td><button type='button' class='btn btn-success'> <a style='color:white;text-decoration:none;'href='admin_deactivate.php?id={$row["cus_id"]}'>Deactivate</a></button></td>";
														     }
														     elseif($row['status'] == false) {

														     	echo "<td><button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;'href='admin_activate.php?id={$row["cus_id"]}'>Activate</a></button></td>";


														     }
														  





														  echo "</tr>";
														}


											}


												} if(!isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM customer";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['cus_id'];  echo "</td>";
														  echo "<td>"; echo $row['cus_fname'];  echo "</td>";
														  echo "<td>"; echo $row['cus_lname'];  echo "</td>";
														  echo "<td>"; echo $row['username'];  echo "</td>";
														  echo "<td>"; echo $row['nic'];  echo "</td>";
														    echo "<td>"; echo $row['email'];  echo "</td>";
														     echo "<td>"; echo $row['mobile'];  echo "</td>";

														     echo "<td>"; echo $row['status'];  echo "</td>";

														     if($row['status']== true) {

														     	echo "<td><button type='button' class='btn btn-success'> <a style='color:white;text-decoration:none;'href='admin_deactivate.php?id={$row["cus_id"]}'>Deactivate</a></button></td>";
														     }
														     elseif($row['status'] == false) {

														     	echo "<td><button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;'href='admin_activate.php?id={$row["cus_id"]}'>Activate</a></button></td>";


														     }
														  





														  echo "</tr>";
														}


											}


												}






											
										?>
	
							</tbody>
						</table>
					</div>	
			</div>
					
										
			<!--view model-->
			<div  class="modal fade"  id="view">
				<div class="modal-dialog">
					<div class="modal-content" >
						<div class="modal-header">
							<button type="button" class="close " data-dismiss="modal" aria-label="Close">
								<span class="w3-text-black w3-xxlarge" aria-hidden="true">&times;</span>
							</button>
							<h5 class="modal-title" id="exampleModalLabel">
								<div class="w3-container" style="background-color: #8cd98c">
									<h2><i class="fa fa-eye"></i> View Customer Details</h2>
								</div>
							</h5>
						</div>	
						<div class="modal-body">
							
								<div id="modal-content">
									<div class="container " style="width:600px">
									
										<input type="hidden" name="eecus_id" id="eecus_id" />

											<p>
												<input  disabled class="w3-input" name="eefirstname" value=""  id="eefirstname">
												<label>First Name</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eelastname" value=""  id="eelastname">
												<label>Last Name</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eebirthdate" value=""  id="eebirthdate">
												<label>Birthdate</label></p>
											</p>

											<p>
												<input  disabled class="w3-input" name="eecountry" value=""  id="eecountry">
												<label>Country</label></p>
											</p>		

											<p>
												<input  disabled class="w3-input" name="eeemail" value=""  id="eeemail">
												<label>Email</label></p>
											</p>	
												
											<p>
												<input  disabled class="w3-input" name="eecontactno" value=""  id="eecontactno">
												<label>Conatct no</label></p>
											</p>			
									</div> 
								</div>
							</div>	
								
						<div class="modal-footer">	
							<button type="button" name="" class="w3-btn  w3-red w3-margin-bottom w3-padding" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
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