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
		
		<!--Content-->
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

			<div class="w3-card-4 w3-col s12 w3-margin">
				
				<div class="w3-container w3">
					<!--searching bar-->
					


					<div class="row" >											
				<!--searching bar-->
					<div class="col-sm-6">
						<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<div class="col-sm-4" >
									<input style="border-color:grey;" class="form-control"  name="keyname" type="text" placeholder="Keyword" id="meal_name">
									
								</div>
								<div class="col-sm-2">
									<input style="padding-top:5px;" class="btn btn-dark" type="submit" value="Search" name="submit">
									
								</div>
								


							</form>
						
					</div>																	
					</div>





					
					
					<div id="result"></div>						
						<!--end search bar-->	
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Cart ID</th>
									
										
										<th>Customer ID</th>
									
										<th>Food ID</th>
										<th>Quantity </th>
									
										<th>Delivery Status</th>
										<th>Delivery Staff</th>
										<th>Assign/Remove Staff</th>

									</tr>

<?php 
									if(isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM cart WHERE id LIKE '%{$_POST["keyname"]}%' OR cus_id LIKE '%{$_POST["keyname"]}%' OR food_id LIKE '%{$_POST["keyname"]}%' OR quantity LIKE '%{$_POST["keyname"]}%' OR delivery_status LIKE '%{$_POST["keyname"]}%'  OR delivery_staff LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


									while($row = $result->fetch_assoc()) {
											 
											$i++;

												echo "<tr>";
											echo "<td>"; echo $row['id'];  echo "</td>";
											
											echo "<td>"; echo $row['cus_id'];  echo "</td>";
											echo "<td>"; echo $row['food_id'];  echo "</td>";
											echo "<td>"; echo $row['quantity'];  echo "</td>";
									
											echo "<td>"; echo $row['delivery_status'];  echo "</td>";
											echo "<td>"; echo $row['delivery_staff'];  echo "</td>";
											$iddd=$row['cus_id']; 
											
											if ($row['delivery_status'] =='Not Accepted') {

												echo "<td> <form action='includes/assignstaff.inc.php' method='post'> 
													";



											

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM staff where type='delivery'";
												

											$results = $conn -> query($sql);

					
											if ($results -> num_rows>0 ) {


												$j=0;

												echo "<select name='staff'>";

											  while($row = $results->fetch_assoc()) {
											  		$j++;

													
														  
													
														echo "<option value='".$row['username']."'>".$row['username']."</option>";

														
														}

														echo"</select>";
											}



	

													echo"
													<input type='hidden' name='id' value='".$iddd."'>
												 	<input type ='submit' class='btn btn-pill btn-dark' value='Assign'> 
												
													
													</form></td>";
											echo "</tr>";


											}	
											else {
												echo "<td> <form action='includes/del_ass_staff.inc.php' method='post'> 
													
													<input type='hidden' name='id' value='".$iddd."'>
												 	<input type ='submit' class='btn btn-pill btn-dark' value='Remove'> </form></td>";
											echo "</tr>";


											}
											
											}
										}


											} elseif(!isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM cart";

											$result = $conn -> query($sql);

					
											if ($result->num_rows>0 ) {


												$i=0;


									while($row = $result->fetch_assoc()) {
											 
											$i++;

												echo "<tr>";
											echo "<td>"; echo $row['id'];  echo "</td>";
											
											echo "<td>"; echo $row['cus_id'];  echo "</td>";
											echo "<td>"; echo $row['food_id'];  echo "</td>";
											echo "<td>"; echo $row['quantity'];  echo "</td>";
									
											echo "<td>"; echo $row['delivery_status'];  echo "</td>";
											echo "<td>"; echo $row['delivery_staff'];  echo "</td>";

											$idd = $row['cus_id']; 

										

											
											if ($row['delivery_status'] =='Not Accepted') {

												echo "<td> <form action='includes/assignstaff.inc.php' method='POST'>";




												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM staff where type='delivery'";
											echo "<select name ='staff'>";

											$results = $conn -> query($sql);

					
											if ($results -> num_rows>0 ) {


												$l=0;

												

											  while($row = $results ->fetch_assoc()) {
											  		$l++;

													
														  
														echo "<option value='".$row['username']."'>".$row['username']."</option>";

														
														}

														
											}

											echo"</select>";


													echo"<input type='hidden' name='id' value='".$idd."'>
												 	<input type ='submit' class='btn btn-pill btn-dark' value='Assign'>";



													echo"
												
													
													</form></td>";

											echo "</tr>";


											}	
											else {
												echo "<td> <form action='includes/del_ass_staff.inc.php' method='post'> 
													
													<input type='hidden' name='id' value='{$row['cus_id']}'>
													<input type ='submit' class='btn btn-pill btn-dark' value='Remove'>


												 </form></td>";
											echo "</tr>";


											}
											
											}
										}


											}
?>
	















								</thead>				
							</table>
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