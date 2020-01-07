
  <?php
session_start();
if (!isset($_SESSION['cus_id'])) {
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



        <img src="Images/admin_bk2.jpg" style="width:1370px;" alt="background-image">

        <nav class="navbar navbar-light" style="background-color:#16242D;"><!--nav bar -->

        <!-- Navbar content -->

           <div class="navbar-left" style="font-family:navfont; font-color:White;">


         <div id="navcontent">

                  <a class="navbar-brand" style="color:White;" href="admin_meals_search.php">Meals</a>
                            <a class="navbar-brand" style="color:White;" href="admin_home.php">Meals</a>
                            <a class="navbar-brand" style="color:White;" href="orders.php">Orders</a>
                            <a class="navbar-brand" style="color:White;" href="view_reservations.php">Reservations Details</a>
                            <a class="navbar-brand" style="color:White;"href="Customer.php"> Customer</a>
                            <a class="navbar-brand" style="color:White;"href="feedback.php">Feedbacks</a>
                            <a class="navbar-brand" style="color:White;"href="staffs.php">Staffs</a>
                            <img src="Images/user.png" style="padding-top:5px;">
                            <a class="navbar-brand" href="login.php" style="color:White;">logout</a>


            </div>

          </div>




      </nav>








  <!-- Start Content -->
  <div class="welcome_page">
  	<!-- Start Section 1 -->
   	<div class="container p20_0">

          <div class="line" align="center"></div>

            <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top:65px;">

            	  <div style="overflow-x:scroll">
                  <table class="table table-bordered" id="pages">
                      <thead>
                          <tr>
                              <th class="text-center">Reservation ID</th>
                              <th class="text-center">Customer ID</th>
                              <th class="text-center">Date</th>
                              <th class="text-center">Table_Type</th>
                              <th class="text-center"> Status</th>
                              <th class="text-center">Staff</th>
                              <th class="text-center">Assign/Remove Staffs</th>


                          </tr>
                          <?php

?>
                      </thead>
                      <tbody>

             <?php

$link = mysqli_connect("localhost", "root", "", "restaurant");

// Check connection
if ($link === false) {
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM reservations";
if ($result = mysqli_query($link, $sql)) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>" . $row['reservation_id'] . "</td>";
		echo "<td>" . $row['cus_id'] . "</td>";

		echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['table_type'] . "</td>";
		echo "<td>" . $row['reservation_status'] . "</td>";

		echo "<td>" . $row['reservation_staff'] . "</td>";
    $irr = $row['cus_id'];

		if ($row['reservation_status'] == 'Not Accepted') {

			echo "<td> <form action='includes/assign_res_staff.php' method='post'>
                            <div>";
                            




                              include 'includes/dbh.inc.php';

                        $sql = "SELECT * FROM staff where type='table'";

                        

                      $results = $conn -> query($sql);

          
                      if ($results -> num_rows>0 ) {


                        $j=0;

                        echo "<select name= stafff>";

                        while($row = $results->fetch_assoc()) {
                            $j++;

                          
                              
                            
                            echo "<option value='".$row['username']."'>".$row['username']."</option>";

                            
                            }

                            echo"</select>";
                      }





                            echo"<input type='hidden' name='id' value='".$irr."'>
                            <input type ='submit' class='btn btn-pill btn-dark' value='Assign'>
                            </div>

                            </form></td>";
			echo "</tr>";

		} else {
			echo "<td> <form action='includes/del_res_staff.php' method='post'>

                            <input type='hidden' name='id' value='{$row['cus_id']}'>
                            <input type ='submit' class='btn btn-pill btn-dark' value='Remove'> </form></td>";
			echo "</tr>";

		}

	}
	// Free result set
	mysqli_free_result($result);
} else {
	echo "No records matching your query were found.";
}

// Close connection
mysqli_close($link);
?>


                      </tbody>
                   </table>
              </div>

            </div>

      </div>

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