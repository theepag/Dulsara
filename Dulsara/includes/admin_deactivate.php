<?php
	include "dbh.inc.php";
	$sql="UPDATE customer set status = 0 where cus_id=".$_GET["id"];
	if($conn->query($sql))
	{
		echo "<script>window.open('Customer.php?mes=Customer Details Modified','_self')</script>";
	}
	else
	{
		echo "<script>window.open('Customer.php','_self')</script>";
	}
?>