
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
.btn-toolbar {
  margin-left:350px;
  text-align: center;
  align-content:center;
  padding: 15px 32px;
  cursor: pointer;
  border-radius: 50%;
}


.btn-primary{
  border-radius: 12px;
  text-align: center;
  padding: 12px 28px;
  background-color: #A9A9A9;
  font-weight: bold;
  font-style: italic;
  cursor: pointer;
}
	.col-md-4{
		width:500px;height:360px;

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
													<a class="navbar-brand" style="color:White;" href="ordernow.php">Meals</a>
													<a class="navbar-brand" style="color:White;" href="view_order.php">My orders</a>
													<a class="navbar-brand" style="color:White;" href="../tablenew.php">Reserve Tables</a>
													<a class="navbar-brand" style="color:White;"href="../AboutUs.php"> About Us</a>
                                                    <?php  if (isset($_SESSION['cus_id'])) {
			                     $row= $_SESSION['cus_fname'];}  ?>
                           <select name="forma" onchange="location=this.value;">
                          <option value=""> <a class="navbar-brand" href=" " style="color:Red;"><?php echo $row; ?></a></option>
                          <option value="../logout.php"> <a class="navbar-brand"  style="color:Red;">logout</a></option>
											
                            </select>
												
												</div>
										</div>
								</nav>
									<br>
                                <!--end header-->

<!--category-->
<div class="btn-toolbar">
           
					 <a class="btn btn-primary" href="ordernow.php" style="padding: 5px 5px; font-weight: ; font-size: 28px; background-color: #4CAF50; border-radius: 50%;" role="button">Chicken</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					 <a class="btn btn-primary" href="buriyani1.php" style="padding: 5px 5px; font-weight: bold; font-size: 28px; background-color: #4CAF50; border-radius: 50%;" role="button">Buriyani</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					 <a class="btn btn-primary" href="kothu1.php" style="padding: 5px 5px; font-weight: bold; font-size: 28px; background-color: #4CAF50; border-radius: 50%;" role="button"">Kottu</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					 <a class="btn btn-primary" href="friedrice1.php" style="padding: 5px 5px; font-weight: bold; font-size: 28px; background-color: #4CAF50; border-radius: 50%;" role="button">FriedRice</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a class="btn btn-primary" href="nasi1.php" style="padding: 5px 5px; font-weight: bold; font-size: 28px; background-color: #4CAF50; border-radius: 50%;" role="button">Nasigoreng</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					
										
							
							 </div>
                <!--foods--> 
                
                
								<?php 
                             include '../includes/dbh.inc.php';
                             

                             
if(isset($_POST["add_to_cart"]))
{
	    $customer_id = $_SESSION['cus_id'];
		$item_name = $_POST["hidden_name"];
		$item_quantity = $_POST["quantity"];
		$item_price = $_POST["hidden_price"];
		$item_id = $_POST["hidden_id"];
	
	$sql = "INSERT INTO cart (cus_id,food_id,quantity) VALUES ('" . $customer_id . "','" . $item_id . "','" . $item_quantity . "')";
    $result = mysqli_query($conn, $sql);
	
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	//	echo $_SESSION["shopping_cart"][0];
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="friedrice1.php"</script>';
			}
		}
	}
}

?>


		
		<div class="container">
			<br />
			<br />
			
			
			<br /><br />
			<?php
				$query = "SELECT * FROM foods where (category_name='Fried Rice') ORDER BY food_id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="buriyani1.php?action=add&id=<?php echo $row["food_id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img  style="width:250px;height:180px" src="../images/<?php echo $row["gallery_link"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["food_name"]; ?></h4>

						<h4 class="text-danger">Rs. <?php echo $row["unit_price1"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["food_name"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["food_id"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["unit_price1"]; ?>" />

					<!--	<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> -->
				<?php	if(isset($_SESSION['cus_id'])){
	echo '<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />';
}else{
echo '<a class="link" href="login.php" style="text-decoration:none">add cart</a>';
} 
?>


					</div>
				</form>
			</div>
					<?php }}?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
			<form action="cart1.php" method="POST">
				<table class="table table-bordered">
				<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
				
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo 'Rs.'.$values["item_price"]; ?></td>
						<td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">Rs. <?php echo number_format($total, 2); ?></td>
					
					</tr>
					<?php   } ?>
						
				</table>
				</form>
			</div>
		</div>
	</div>
  
			


 

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
					  
									 weekday      7:30 AM – 10:30 PM <br>
									weekend    7:30 AM – 10:30 PM
						</div>
					</div>
				</div>
			</nav>
		</div>



</body>
</html>