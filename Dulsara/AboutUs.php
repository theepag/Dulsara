
	<!doctype html>
		<html lang="en">
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				<!-- Bootstrap CSS -->
				 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

				<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
				<link rel="stylesheet" href="css/home.css" >
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
				<script src="js/comment.js"></script>
			  <title>Dulsara Restaurant</title>
				<style>
						@font-face {
					font-family: navfont;
					src: url(fonts/BreeSerif-Regular.otf);}
					@font-face {
					font-family:domine;
					src: url(fonts/Domine-Regular.ttf);}

					.navbar-brand{
					  padding-left: 30px;}

					.navcontent {
						font-family:navfont;}
					.navbar-login {
					  color: #319E82;
					  font-size:20px;}
					.carousel-item-active {
					  width: auto;
					  height: auto;}
					.Greatfood,.dulasarastoryhead {
					  font-family:domine;
					  font-size:33.4pt;
					  text-align: center;}
					.cont{
					  text-align:center;}
					.GreatfoodCont {
					  text-align:justify-all;
					  font-family:Verdana;}
					.bodygreatfood,.dulasarastory {
					  padding-right:270px;
					  padding-left: 270px;
					  padding-top: 100px;}

					.Reservetable,.Aboutus {
					  text-align:center;
					  padding-top: 30px;}
					.mybutton{
					  background-color:#319E82;
					  font-size:30px;
					  color:white;
					  border-radius:12px;}
					.col2 {
					  padding-left: 120px;}

					.col3 {
					  padding-left: 120px;}
					.col4 {
					  padding-left: 120px;
					  color:White;
					}
					.icons {
					  align-items: center;}
					#footer {
					  color: White;
					  font-size:17px;}
				</style>
					<script>
		$(document).ready(function(){

		 $('#comment_form').on('submit', function(event){
		  event.preventDefault();
		  var form_data = $(this).serialize();
		  $.ajax({
		   url:"addcomment.php",
		   method:"POST",
		   data:form_data,
		   dataType:"JSON",
		   success:function(data)
		   {
			if(data.error != '')
			{
			 $('#comment_form')[0].reset();
			 $('#comment_message').html(data.error);
			 $('#comment_id').val('0');
			 load_comment();
			}
		   }
		  })
		 });

		 load_comment();

		 function load_comment()
		 {
		  $.ajax({
		   url:"fetchcomment.php",
		   method:"POST",
		   success:function(data)
		   {
			$('#display_comment').html(data);
		   }
		  })
		 }

		 $(document).on('click', '.reply', function(){
		  var comment_id = $(this).attr("id");
		  $('#comment_id').val(comment_id);
		  $('#comment_name').focus();
		 });

		});
		</script>
			</head>
			<body>
    			<nav class="navbar navbar-light" style="background-color:#16242D;">
									<!-- Navbar content -->
										<div class="container" style="font-family:navfont; font-color:White;">
											<img src="Images/logo.png" alt="Dulsara logo">
												<div id="navcontent">
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="home.php">Home</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="./foodss/view.php">Meals</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="tablenew.php">Reserve Tables</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;"href="AboutUs.php"> About Us</a>
												  <a class="navbar-brand" href="login.php" style="color:White; font-family:Verdana;">login</a>
																		<?php	/* if(isset($_SESSION['cus_id'])){
echo '<a class="navbar-brand" href="logout.php" style="color:White; font-family:Verdana;">logout</a>';
}else{
echo '<a class="navbar-brand" href="login.php" style="color:White; font-family:Verdana;">login</a>';
}*/?>

												</div>
										</div>
				</nav>

								<section id="services">
    <div class="" align = "center" style="font-family:navfont">


        <div class=""  >
        <div class="container" style="  padding:50px; background-color: #003366 " >
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

         <h1 style="color:#0CF; padding:5px;">Our Varieties</h1>
          <div class="carousel-inner" role="listbox" >
					<div class="item active">
					  <div class="row">
						<div class="p30_0">
							<div class="col-md-2">
								<img src="images/slider/1.jpg" class="img img-responsive " />
								 </div>
							<div class="col-md-2">
								<img src="images/slider/2.jpg" class="img img-responsive " />
								 </div>
							<div class="col-md-2">
								<img src="images/slider/3.jpg" class="img img-responsive " />
								 </div>
							<div class="col-md-2">
								<img src="images/slider/4.jpg" class="img img-responsive " />
								 </div>
						   <div class="col-md-2">
								<img src="images/slider/5.jpg" class="img img-responsive " />
								 </div>
							<div class="col-md-2">
								<img src="images/slider/6.jpg" class="img img-responsive " />
								 </div>
						 </div>
					  </div>
					</div>

            <div class="item">
              <div class="row">
              	<div class="p30_0">
                    <div class="col-md-2">
                        <img src="images/slider/7.jpg" class="img img-responsive " />
                         </div>
                    <div class="col-md-2">
                        <img src="images/slider/8.jpg" class="img img-responsive " />
                       </div>
                    <div class="col-md-2">
                        <img src="images/slider/9.jpg" class="img img-responsive " />
                        </div>
                   <div class="col-md-2">
                        <img src="images/slider/10.jpg" class="img img-responsive " />
                         </div>
					<div class="col-md-2">
                        <img src="images/slider/11.jpg" class="img img-responsive " />
                         </div>
					<div class="col-md-2">
                        <img src="images/slider/12.jpg" class="img img-responsive " />
                         </div>
                 </div>
              </div>
            </div>

            <div class="item">
               <div class="row">
               	<div class="p30_0">
                    <div class="col-md-2">
                        <img src="images/slider/13.jpg" class="img img-responsive " />
                         </div>
                    <div class="col-md-2">
                        <img src="images/slider/14.jpg" class="img img-responsive " />
                         </div>
                    <div class="col-md-2">
                        <img src="images/slider/15.jpg" class="img img-responsive " />
                         </div>
                   <div class="col-md-2">
                        <img src="images/slider/16.jpg" class="img img-responsive " />
                         </div>
					<div class="col-md-2">
                        <img src="images/slider/17.jpg" class="img img-responsive " />
                         </div>
					<div class="col-md-2">
                        <img src="images/slider/18.jpg" class="img img-responsive " />
                         </div>
                 </div>
              </div>
             </div>
           </div>
         </div>
       </div>
     </div>
</div>
</section>

		<div class ="col-12">
			<div class ="col-6">
			<div>
			<h2 align ="center">Rate us</h2>
						<?php

include "includes/dbh.inc.php";



$find_data = "select * from rate";
$result = $conn -> query($find_data);
while ($row = mysqli_fetch_assoc($result)) {
	
	$id = $row['id'];
	$name = $row['name'];
	$food = $row['food'];
	$current_rating = $row['rating'];
	$hits = $row['hits'];

	echo "
					<form action='rates.php' method='POST'>
					$name:<select name='rating' class='form-control selcls'>
					<option>1-Excellent</option>
					<option>2-Very good</option>
					<option>3-Good</option>
					<option>4-Average</option>
					<option>5-Bad</option>
					
					</select>
					 <div class='form-group'>
					<input type='hidden' value='$food' name='food'>
					</div>
					<div>
					<input type ='submit' value='Rate!' class='btn btn-info'> </div>Current Rating:";
	echo round($current_rating, 3);
	echo "


					</form>

					";
}
?>
				</div>
			<div class="">
						<h2 align="center">Comment us</h2>
					<br />

				   <form method="POST" id="comment_form">
						<div class="form-group">
							<input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
						</div>
						<div class="form-group">
							<textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
						</div>
						<div class="form-group">
							<input type="hidden" name="comment_id" id="comment_id" value="0" />
							<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
						</div>
					</form>
					<span id="comment_message"></span>
						<br />
					<div id="display_comment"></div>
				</div>
		</div>
				<div class ="col-6" >
					<div >
						<h2 align="center">About us</h2>
							<p>Welcome to Badhula Dulsara restaurant. The Dulsara shows the diversity in means of Unique experiences in each of the restaurant with specified facilities, so order your food and we will deliver.

		Ideally, we are located Cocowatte road Badhula town.

							<p> Our restaurant takeway,food order,delivery,table reservation combine with service along with the inspired interior and nature aided surrounding.

		We facilitates the spaces for the private parties with the repetitive services.</p>

					
					<p>Dulsara delivers a great hospitality for the customers, with well trained and perfect staff members on time along the satisfaction.</p>
					<p>prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but we also offer take-out and food delivery services, and some offer only take-out and delivery. 
In our restaurant, serve all the major meals, such as breakfast, lunch, and dinner.<p>
					
					</div>


						<div >
							<h2 align="center">Hotel facilities</h2>
								<ul >
									<li style ="padding-top:20px"> Takeaway Facilities</li>
									<li style ="padding-top:20px">Food Order</li>
									<li style ="padding-top:20px">Table reservation</li>
									<li style ="padding-top:20px">Food Delivery</li>
									<li style ="padding-top:20px">View Food items</li>
									<li style ="padding-top:20px">Celebrate Parties</li>

								</ul>
						</div>
						<div >
							<h2 align="center">Orders / Enquiry</h2>
							
							<p>Tel : 0552 228 215</p>

							<p>Email: dulsara@gmail.com</p>
								
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
