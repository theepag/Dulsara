<?php 
session_start();
if(!isset($_SESSION['cus_id'])){
  header("location:./home.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Now!!!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2></h2>
<p></p>
<p></p>

<button class="open-button" onclick="openForm()">Order Now</button>

<div class="form-popup" id="myForm">
  <form action=" " class="form-container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="submit">send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
 
 <?php 
                             include './includes/dbh.inc.php';
                             

                             
if(isset($_POST["submit"]))
{
  $id=$_SESSION['cus_id'];
  $sel_query="Select * from customer where cus_id='".$id."';";
  echo $sel_query;
  $result = mysqli_query($conn,$sel_query);
    $row = mysqli_fetch_assoc($result);
    if ($row = mysqli_fetch_assoc($result)) {
     echo $row['mobile'];
          
    
    
    
  
    } 


 
//	include ( "NexmoMessage.php" );
	/**
	 * To send a text message.
	 *
	 */
	// Step 1: Declare new NexmoMessage.
	//$nexmo_sms = new NexmoMessage('b58445ed', 'HMECAa86rqIMmOn6');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	//$info = $nexmo_sms->sendText( "94$rd", 'MyApp', "Hello!" );
	// Step 3: Display an overview of the message
    //echo $nexmo_sms->displayOverview($info);
    // Done!
   }
?>

</body>
</html>
