		
<?php
	include "includes/dbh.inc.php";
	$sql="DELETE from staff where staff_id=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('staffs.php?mes=Staff_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('staffs.php','_self')</script>";
	}


?>