<?php
require('../includes/dbh.inc.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM cart WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: view_order.php"); 
?>