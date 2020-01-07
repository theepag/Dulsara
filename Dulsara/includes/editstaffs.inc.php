<?php

		include 'dbh.inc.php';

		$fname = $_POST['fname'];

		$lname = $_POST['lname'];

		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$salary = $_POST['salary'];
		$username = $_POST['username'];


		$password =$_POST['password'];
		$nic =$_POST['nic'];
		$type = $_POST['type'];
		

		
		// Error handlers
		// check inputs are empty

		/*	if (empty($uid) || empty($pwd) || empty($mealid) ||  empty($mealname) ||  empty($mealdesc) || empty($pricepermeal) ||  empty($eType)) {

			} */

		$sql = "INSERT INTO staff(first_name, last_name,username,password,nic,mobile,email,type,salary) VALUES('$fname','$lname','$username','$password','$nic','$mobile','$email','$type','$salary');";
		mysqli_query($conn,$sql);
		header("Location: ../editstaff.php?staff_added_success");
		