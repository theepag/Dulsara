<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'restaurant');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $nic = mysqli_real_escape_string($db, $_POST['nic']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

   if(!preg_match("/^[a-zA-Z'-]+$/",$fname)) {
  array_push($errors, "invalid first name");
  }
  if(!preg_match("/^[a-zA-Z'-]+$/",$lname)) {
  array_push($errors, "invalid first name");
  }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $customer_check_query = "SELECT * FROM customer WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $customer_check_query);
  $customer = mysqli_fetch_assoc($result);
  
  if ($customer) { // if user exists
    if ($customer['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($customer['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customer (cus_fname, cus_lname, nic, mobile, email, username, password) 
  			  VALUES('$fname', '$lname', '$nic', '$mobile', '$email', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
echo "<script>
var x= confirm('Registration Sucessful press ok to login!');
if(x){
  window.location='login.php';
}
</script>";
 
  }
}

// ... 

?>


