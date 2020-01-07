<?php
	include "dbh.inc.php";
	$sql="UPDATE customer set status = 1 where cus_id=".$_GET["id"];
	if($conn->query($sql))
	{
		//echo "<script>window.open('Customer.php?mes=Customer Details Modified','_self')</script>";
		echo "<script type='text/javascript'>alert('Modified');</script>";
		echo "Activated";

	}
	else
	{
		echo "<script>window.open('Customer.php','_self')</script>";
	}
?>