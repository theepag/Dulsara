<?php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:./login.php");
}
?>



<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<title>Dulsara Restaurant</title>
			
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="description" content="">
			<meta name="author" content="Dulsara">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

			<!--java script-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
					
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			
		 
				
	
				<style type="text/css">
						  [class*="col-"] {
						float: left;
						
					}
					.col-1 {width: 8.33%;}
					.col-2 {width: 16.66%;}
					.col-3 {width: 25%;}
					.col-4 {width: 33.33%;}
					.col-5 {width: 41.66%;}
					.col-6 {width: 50%;}
					.col-7 {width: 58.33%;}
					.col-8 {width: 66.66%;}
					.col-9 {width: 75%;}
					.col-10 {width: 83.33%;}
					.col-11 {width: 91.66%;}
					.col-12 {width: 100%;}



					.col-9{

					background-image: url(bg_bot_img.jpg), url(bg_bot_img.gif);
						

					}

					body{
					 ddbackground-image: url(Images/bg_slider.jpg);
					  background-color:#D8D9D***B;
						}
						
					@font-face {
						font-family: navfont;
						src: url(fonts/BreeSerif-Regular.otf);
						
					}
					@font-face {
						font-family:domine;
						src: url(fonts/Domine-Regular.ttf);
					}

					.navbar-brand{
					  padding-left: 30px;

					}

					.navcontent {
						font-family:navfont;

					}
					.navbar-login {
					  color: #319E82;
					  font-size:20px;
					}
					.carousel-item-active {
					  width: auto;
					  height: auto;
					}
					.Greatfood,.dulasarastoryhead {
					  font-family:domine;
					  font-size:33.4pt;
					  text-align: center;
					}
					.cont{
					  text-align:center;
					}
					.GreatfoodCont {
					  text-align:justify-all;
					  font-family:Verdana;
					}
					.bodygreatfood,.dulasarastory {
					  padding-right:270px;
					  padding-left: 270px;
					  padding-top: 100px;
					}

					.Reservetable,.Aboutus {
					  text-align:center;
					  padding-top: 30px;
					}
					.mybutton{
					  background-color:#319E82;
					  font-size:30px;
					  color:white;
					  border-radius:12px;

					}
					.col2 {
					  padding-left: 120px;
					}

					.col3 {
					  padding-left: 120px;
					}
					.col4 {
					  padding-left: 120px;
					  color:White;
					}
					.icons {
					  align-items: center;
					}
					#footer {
					  color: White;
					  font-size:17px;
					}
					a:hover {
					  text-decoration: none;
					}

				</style>


			</head>
			<body>
				<!-- Navigation bar --> 
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
                          <a class="navbar-brand" href="logout.php" style="color:White;">logout</a>
						<img src="Images/user.png" style="padding-top:px;">

								

							</div>
						
						</div>

					</nav>

				<!-- Navigation bar end-->  

				<!-- Start of body -->
					<div class=" row">

						<div class="col-lg-10 col-lg-offset-1 w3-white">
							<div class="w3-card-4 w3-col s12 w3-margin">
								<div class="w3-margin">			
									<div class=" ">
										<div class="mealss" style="font-size:22px; padding-left:20px;"> <br> Add a meal 
										</div>
									</div>
									<div class="col-12">
										<form   id="add_meal" method="POST" action="includes/addnewitem.inc.php" enctype="multipart/form-data">
											<div class="col-6">
												<div class="w3-half w3-padding">      
													<input class="w3-input w3-border" name="meal_id" type="text" placeholder="Meal ID"  id="meal_id"></div>
												<div class="w3-half w3-padding">      
													<input class="w3-input w3-border" name="meal_name" type="text" placeholder="Meal Name"  id="meal_name" required="required"></div>
												<div class="w3-padding">
													
													
													  <textarea class="form-control" placeholder="Meal Description" name="meal_desc" rows="5" required="required"></textarea>
	  

												</div>
												<div class="w3-padding">
													<select class="w3-select w3-border" name="eType" data-validation="required" data-validation-error-msg="Please Select a Category" id="eType">
														<option value=""  selected>Select Meal Category</option>
														<option value="Chicken">Chicken</option>
														<option value="Fried Rice">Fried Rice</option>
														<option value="Koththu" >Koththu</option>
														<option value="Buriyani">Buriyani</option>
														<option value="Nasigurang">Nasigurang</option>
														 <option value="#" >Others</option>
													  </select>
												</div>
												<div class="w3-padding">
													<input class="w3-input w3-border" name="price_per_meal" type="text" placeholder="Price per meal (LKR)"  id="price_per_meal">
												</div>
											</div>

											<div class="col-6">
												<div class="">
													
														<h2>Upload a photo</h2><hr/>
														<div id="imageVal" style="width:100%;height:100%"><img id="myImg" src="Images/fresh.png" alt="meal image" class="w3-image" style="width:68%;height:80%"/>
														</div>
														<br>		
													
														<input type="file" name="photo" id="fileSelect" class="w3-btn w3-block w3-black w3-padding-large">
														<p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
														
														<div class="w3-padding ">
															
															<span id="uploaded_image"></span>
														</div>
													

												</div>
											
												<div class="w3-row-padding w3-margin-bottom">	
													<div class="w3-half">
														<input type="submit" class="w3-btn w3-green w3-block " name="meal_add" value="Add Meal">
													</div> 
													<div class="w3-half">
														<input type="reset" class="w3-btn w3-red w3-block " name="meal-cancel" value="Clear">
													</div>								
												</div>
															
										</form>
									
											<div id="result"></div>
																				
									</div> 
								</div> 
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
  
</div>
</nav>

</div>



 
  </body>
</html>