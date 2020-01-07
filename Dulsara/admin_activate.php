<?php
	include "includes/dbh.inc.php";
	$sql="UPDATE customer set status = 1 where cus_id=".$_GET["id"];
	if($conn->query($sql))
	{
		echo "<script>window.open('Customer.php?mes=Customer Activated','_self')</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Error');</script>";
		echo "<script>window.open('Customer.php','_self')</script>";

	}
?>