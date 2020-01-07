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
		
			<!-- font awesome -->
			<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			
			
					
		
					
			

		</head>
		<body >
			<nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->
			 <!-- Navbar content -->
				<div class="container" style="font-family:navfont; font-color:White;">
					<img src="Images/logo.png" alt="Dulsara logo">
					<div id="navcontent">
						<a class="navbar-brand" style="color:White;" href="#">Home</a>
						<a class="navbar-brand" style="color:White;" href="#">Customers </a>
						<a class="navbar-brand" style="color:White;"href="meals.php"> Meals</a>
						<a class="navbar-brand" style="color:White;"href="orders.php">Orders</a>
						<a class="navbar-brand" style="color:White;"href="tables.php">Tables</a>
						<a class="navbar-brand" style="color:White;"href="viewreserv.php">Reservations</a>
						<a class="navbar-brand" style="color:White;"href="Ad_Feedack.php">Feedbacks</a>
						<a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
						<a class="navbar-login" href="login.html">Logout </a>
					</div>	
				</div>
			</nav>
			
				<div class ="col-12" >
					<div class ="col-8">
						<h2>ABOUT US</h2>
						<p>Welcome to Badhula Dulsara restaurant. The Dulsara shows the diversity in means of Unique experiences in each of the restaurant with specified facilities, so order your food and we will deliver.

						Ideally, we are located Cocowatte road Badhula town.
						
						<p> Our restaurant takeway,food order,delivery,table reservation combine with service along with the inspired interior and nature aided surrounding.

						We facilitates the spaces for the private parties with the repetitive services.</p>

						<p>Dulsara delivers a great hospitality for the customers, with well trained and perfect staff members on time along the satisfaction.</p>
					</div>
												
					<div>
						<div class ="col-4">
							<h2>HOTEL FACILITIES</h2>
								<ul>
									<li> Takeaway Facilities</li>
									<li>Food Order</li>
									<li>Table reservation</li>
									<li>Food Delivery</li>
									<li>View Food items</li>
									<li>Celebrate Parties</li>
									
								</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<h2 style ="font-color:grey">Rating Details</h2>
						<table class="table table-condensed">
	<thead>
	  <tr>
	    <th> Name</th>
	    <th> Email</th>
	    
		<th>Mobile</th>
		<th>Message</th>
		<th>Rating</th>
	  </tr>
	</thead>
	<tbody>
	<?php 
		$conn = mysqli_connect('localhost','root','','restaurant');
		if($qry = mysqli_query($conn,"SELECT * FROM rating")){
			while($show = mysqli_fetch_assoc($qry)){
				echo "<tr>";
					echo "<td>".$show['name']."</td>";					
					echo "<td>".$show['email']."</td>";	
						echo "<td>".$show['mobile']."</td>";	
						echo "<td>".$show['message']."</td>";	
					if($show['rate']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
					if($show['rate']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rate']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rate']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
					if($show['rate']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
				echo "</tr>";
			}
		}
	?>
	</tbody>
</table>
				</div>
			

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