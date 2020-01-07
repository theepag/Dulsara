<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

<script type="text/javascript">
					 function valid()
{


 var x = confirm("Invalid table reservation staffname");


 if(x) {


 	window.location.replace("../view_reservations.php");

 }

}


</script>
</body>
</html>



<?php

include 'dbh.inc.php';

$val = $_POST['input'];

$id = $_POST['id'];

$sql = "UPDATE reservations SET reservation_staff='$val' where cus_id='$id'";
echo $sql;

include 'dbh.inc.php';


		if ($conn->query($sql)) {

			include 'dbh.inc.php';
			$sql = "UPDATE reservations SET reservation_status='Accepted' where cus_id='$id'";

			if ($conn->query($sql)) {




				include 'dbh.inc.php';
				$sql2 = "SELECT mobile from customer where cus_id='$id'";

				$result = $conn->query($sql2);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						$rd = $row['mobile'];

						include "../NexmoMessage.php";
						/**
						 * To send a text message.
						 *
						 */
						// Step 1: Declare new NexmoMessage.

						$nexmo_sms = new NexmoMessage('b3d7fe42', '2KQdWtecfjrzykgK');
						// Step 2: Use sendText( $to, $from, $message ) method to send a message.
						$info = $nexmo_sms->sendText("94$rd", 'MyApp', "Your Order is confirmed");
						// Step 3: Display an overview of the message
						echo $nexmo_sms->displayOverview($info);

					}

				}

				echo "<script>window.open('../view_reservations.php?mes=Staff Assigned','_self')</script>";

















			}

		}

	 else {
		echo '<script type="text/javascript"> valid(); </script>';

	}
?>
