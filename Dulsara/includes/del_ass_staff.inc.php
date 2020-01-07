<?php
	include 'dbh.inc.php';
	
	$id =$_POST['id'];
	
	$sql="UPDATE cart SET delivery_staff=null where cus_id='$id'";

	 if($conn->query($sql)){



	 	$sql="UPDATE cart SET delivery_status='Not Accepted' where cus_id='$id'";

		 if($conn->query($sql))
	{
		

		echo "<script>window.open('../orders.php?mes=Staff_Removed','_self')</script>";

	}





	 		echo "<script>window.open('../orders.php?mes=','_self')</script>";



	 }


	 else
	{
		echo "<script>window.open('../orders.php','_self')</script>";
	}


 	

?> 

