<?php

include "includes/dbh.inc.php";


	$food = $_POST['food'];
	$post_rating = $_POST['rating'];


	$find_data = "select * from rate where food='$food' ";
	
$result = $conn -> query($find_data);
while ($row = mysqli_fetch_assoc($result)) {
		   
	$id = $row['id'];

	$current_rating = $row['rating'];
	$current_hits = $row['hits'];
	}
	$new_hits = $current_hits +1;
	$update_hits = "UPDATE rate SET hits ='$new_hits' WHERE id = '$id'";
	$result1 = $conn -> query($update_hits);
		$pre_rating = $current_rating + $post_rating;
		if($current_hits==0){
		$new_rating = $pre_rating/1;
		}
		else{
			$new_rating = $pre_rating/2;
		}
	
		$update_rating = "UPDATE rate SET rating ='$new_rating' WHERE id = '$id'";
		$result2 = $conn -> query($update_rating);
		header("location:Aboutus.php");
		
	
?>  