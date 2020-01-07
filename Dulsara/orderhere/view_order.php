
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
 ddbackground-image: url(../Images/bg_slider.jpg);
  background-color:#D8D9D***B;

}

/* my page*/ 
* {
    box-sizing: border-box;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
    height: 150px; /* Should be removed. Only for demonstration */
}

.left, .right {
  width: 30%;
}

.middle {
  width: 40%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.button {
    background-color: #555555; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #555555;} /* Blue */
.button3 {background-color: #555555;} /* Red */ 
.button4 {background-color: #555555;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */





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
    src: url(../fonts/BreeSerif-Regular.otf);
    
}
@font-face {
    font-family:domine;
    src: url(../fonts/Domine-Regular.ttf);
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
											<img src="../Images/logo.png" alt="Dulsara logo">
												<div id="navcontent">
													<a class="navbar-brand" style="color:White;" href="../home_cus.php">Home</a>
													<a class="navbar-brand" style="color:White;" href="./ordernow.php">Meals</a>
													<a class="navbar-brand" style="color:White;" href="../tablenew.php">Reserve Tables</a>
													<a class="navbar-brand" style="color:White;"href="../AboutUs.php"> About Us</a>
                                                    <a class="navbar-brand" style="color:White;"href="./view_order.php"> View Orders</a>
                                                    <?php  if (isset($_SESSION['cus_id'])) {
			                     $row= $_SESSION['cus_fname'];}  ?>
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;"><?php echo $row; ?></a></option>
                          <option value="../logout.php"> <a class="navbar-brand"  style="color:Red;">logout</a></option>
											
                            </select>
												
												</div>
										</div>
								</nav>

                                <!--end header-->

<!--category-->
                <!--foods--> 
                <h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>meal_id</strong></th>
<th><strong>customer_id</strong></th>
<th><strong>food_id</strong></th>
<th><strong>quantity</strong></th>
<th><strong>Delete</strong></th>
<th><strong>Confirm Order</strong></th>
</tr>
</thead>
<tbody>
<?php
include '../includes/dbh.inc.php';
$count=1;
$id=$_SESSION['cus_id'];
$sel_query="Select * from cart where cus_id='".$id."';";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["cus_id"]; ?></td>
<td align="center"><?php echo $row["food_id"]; ?></td>
<td align="center"><?php echo $row["quantity"]; ?></td>

<td align="center">
       <form action="view_order.php" method="POST">
       <input type="submit" name="submit" value="delete">
       </form>
     
       </td>
       <?php
        if (isset($_POST["submit"])) {
    echo '<script>window.confirm(" confirm delete !!")</script>';
    echo '<script>window.location="delete.php?id='. $row["id"].'      "</script>';
  }

 
?>
      <td align="center">
       <form action="view_order.php" method="POST">
       <input type="submit" name="submit1" value="Confirm">
       </form>
     
       </td>
       <?php
        if (isset($_POST["submit1"])) {
    echo '<script>window.confirm(" your order is confirm  !!")</script>';
    echo '<script>window.location=" view_order.php"</script>';
  }

 
?>
</tr>
<?php $count++; } ?>
</tbody>
</table>



                                <!-- Footer -->


                                <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<div id="footer">

    <nav class="navbar navbar-dark bg-dark" style="padding-top: 30px;">  <!--nav bar -->
  <!-- Navbar content -->
   <div class="container">

 
  <div class="row">
    <div class="col1">
      <img src="../Images/logo.png" alt="Dulsara Logo"></br></br>
   
            

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
              <a href="#" class="normaltip" title="Facebook"><img src="../Images/icon1.gif" alt=""></a>
              
              <a href="#" class="normaltip" title="Twitter"><img src="../Images/icon3.gif" alt=""></a>
              
              
            </p>
          
       
            s
            
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
