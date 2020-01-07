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
				
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script type="text/javascript">
					 function conDelete(y) 
{


 var x = confirm("Are you sure you want to delete?");
 if(x) {

 
 	window.location.replace("admin_delete.php?id="+y);

 }

}


				</script>


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
		  
			   <div class="navbar-left" style="font-family:navfont; font-color:White;">
			  
					
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

					


			

<!--
			<div class="w3-card-4 w3-col s12 w3-margin">
				<div class="w3-container w3-padding ">
					<div class="row  w3-xxxlarge " style="padding-left:16px"><img src="imgs/meals.jpg" style="width:40%" "height:10%">&nbsp;&nbsp;</i> Meals </div>
				</div> -->



									
				<div class="row" >											
				<!--searching bar-->
					<div class="col-sm-6">
						<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
								<div class="col-sm-4" >
									<input style="border-color:grey;" class="form-control"  name="keyname" type="text" placeholder="Keyword">
									
								</div>
								<div class="col-sm-2">
									<input style="padding-top:5px;" class="btn btn-dark" type="submit" value="Search" name="submit">
									
								</div>
								


							</form>
						
					</div>										
					<div class="col-sm-6" style="padding-right:33px;">
						<button style="float:right;" class="btn btn-dark"type="button" onClick= "window.location.href ='addnew_meal.php';" ><i class=></i>Add New Meal</button>
					</div>
												
					</div>


											
					<div id="result">
						


					</div>										
					<!--end search bar-->																	
						<div class="row  w3-margin" >
							<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Meal ID</th>
										<th>Meal Name</th>
										<th>Meal Description</th>
										<th>Meal image</th>
										<th>Meal type</th>
										<th>Price</th>
										<th></th>		
									</tr>

										<?php 
											if(isset($_POST["submit"])) {

												include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM foods WHERE food_name LIKE '%{$_POST["keyname"]}%' OR food_desc LIKE '%{$_POST["keyname"]}%' OR unit_price1 LIKE '%{$_POST["keyname"]}%' OR category_name LIKE '%{$_POST["keyname"]}%'";

											$result = $conn -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['food_id'];  echo "</td>";
														  echo "<td>"; echo $row['food_name'];  echo "</td>";
														  echo "<td>"; echo $row['food_desc'];  echo "</td>";
														  echo "<td>"; echo "<img src=Images/".$row['gallery_link'].">"; echo "</td>";
														  echo "<td>"; echo $row['category_name'];  echo "</td>";
														  echo "<td>"; echo $row['unit_price1'];  echo "</td>";
														  echo "<td>";
														  echo "<button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;' onClick='conDelete({$row["food_id"]})'>Delete </a></button>";
														  echo "</td>";
														

														  echo "</tr>";
														}


											}


												} elseif (!isset($_POST["submit"])) {


														include 'includes/dbh.inc.php';

												$sql = "SELECT * FROM foods";

											$result = $conn -> query($sql);

					
											if ($result -> num_rows>0 ) {


												$i=0;


											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['food_id'];  echo "</td>";
														  echo "<td>"; echo $row['food_name'];  echo "</td>";
														  echo "<td>"; echo $row['food_desc'];  echo "</td>";
														  echo "<td>"; echo "<img src=Images/".$row['gallery_link'].">"; echo "</td>";
														  echo "<td>"; echo $row['category_name'];  echo "</td>";
														  echo "<td>"; echo $row['unit_price1'];  echo "</td>";
														  echo "<td>";
														  echo "<button type='button' class='btn btn-danger'> <a style='color:white;text-decoration:none;' onClick='conDelete({$row["food_id"]})'>Delete </a></button>";





 



														  echo "</td>";
														

														  echo "</tr>";
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