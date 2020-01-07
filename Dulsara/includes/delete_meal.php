<?php 

											include 'includes/dbh.inc.php';
										

													$sql = "DELETE* FROM foods where food_id='$row['food_id']';"

													$message = 'Are you sure want to delete this item?';
													echo "alert($message)";
											

													if ($conn->query($sql) === TRUE) {
    												echo "Record deleted successfully";
													}
													 else {
    												echo "Error deleting record: " . $conn->error;
?>