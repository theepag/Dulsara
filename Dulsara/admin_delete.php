
		
<?php
	include "includes/dbh.inc.php";
	$sql="DELETE from foods where food_id=".$_GET['id'].";";
	if($conn->query($sql))
	{
		echo "<script>window.open('admin_home.php?mes=Meal_Successfully_Deleted','_self')</script>";

	}
	else
	{
		echo "<script>window.open('admin_home.php','_self')</script>";
	}


?>