<?php 
session_start();
//var_dump($_SESSION['cus_id']);exit();
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

</style>


  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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



</style>
    

					<!--nav bar -->
								<nav class="navbar navbar-light" style="background-color:#16242D;">
									<!-- Navbar content -->
										<div class="container" style="font-family:navfont; font-color:White;">
											<img src="Images/logo.png" alt="Dulsara logo">
												<div id="navcontent">
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="home.php">Home</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="./orderhere/ordernow.php">Order Now</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;" href="tablenew.php">Reserve Tables</a>
													<a class="navbar-brand" style="color:White; font-family:Verdana;"href="AboutUs.php"> About Us</a>
                          
                          <?php  if (isset($_SESSION['cus_id'])) {
                             $row= $_SESSION['cus_fname'];}  ?>
                              <img src="Images/user.png" style="padding-top:5px;margin-left:150px;">
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;margin-left:150px;"><?php echo $row; ?></a></option>
                          <option value="logout.php"> <a class="navbar-brand"  style="color:Red;margin-left:150px;">logout</a></option>
                          
                            </select>
                           
												</div>
										</div>
								</nav>


<!--slide show-->



									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
								<div class="carousel-item active">
								  <img class="d-block w-100" src="Images/img1.jpeg" alt="First slide"height="400px" width="400px">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="Images/img2.jpg" alt="Second slide" height="400px" width="400px">
								</div>
								<div class="carousel-item">
								  <img class="d-block w-100" src="Images/img3.jpg" alt="Third slide" height="400px" width="400px">
								</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>



							   








<!-- Home content -->


<div class="bodygreatfood">

       <p class="Greatfood"> 
                    Great Food, Great Atmosphere
        </p>

        <p class="GreatfoodCont">
          Welcome to Badhula Dulsara restaurant. The Dulsara shows the diversity in means of Unique experiences in each of the restaurant with specified facilities, so order your food and we will deliver. Ideally, we are located Cocowatte road Badhula town.
        </p>


        <p class="Reservetable">


                
                <button type="button" class="mybutton" onclick="window.location.href='tablenew.php'">MAKE A RESERVATION</button>
        </p> 
</div>


<div class="dulasarastory">

       <p class="dulasarastoryhead"> 
                    Dulsara's Story
        </p>

        <p class="dulasarastorycont">

                This is one of retaurant shows the diversity in means of unique experiences in each of the retaurant with all facilities. Our restaurant takeway,food order,delivery,table reservation combine with service along with the inspired interior and nature aided surrounding. We facilitates the spaces for the private parties with the repetitive services.

Dulsara delivers a great hospitality for the customers, with well trained and perfect staff members on time along the satisfaction.

prepares and serves food and drinks to customers. Meals are generally served and eaten on the premises, but we also offer take-out and food delivery services, and some offer only take-out and delivery. In our restaurant, serve all the major meals, such as breakfast, lunch, and dinner.


        </p>


        <p class="Aboutus">
                <button type="button" class="mybutton" onclick="window.location.href='AboutUs.php'" style="padding: 5px 10px; font-size: 20px;">ABOUT US</button>
        </p> 
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