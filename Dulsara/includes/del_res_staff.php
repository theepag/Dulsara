<?php
	include 'dbh.inc.php';
	
	$id =$_POST['id'];
	
	$sql="UPDATE reservations SET reservation_staff=null where cus_id='$id'";

	 if($conn->query($sql)){



	 	$sql="UPDATE reservations SET reservation_status='Not Accepted' where cus_id='$id'";

		 if($conn->query($sql))
	{
		

		echo "<script>window.open('../view_reservations.php?mes=Staff Removed','_self')</script>";

	}





	 		echo "<script>window.open('../view_reservations.php?mes=','_self')</script>";



	 }


	 else
	{
		echo "<script>window.open('../view_reservations.php','_self')</script>";
	}


 	

?> 

