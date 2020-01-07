
<?php
session_start();
if (!isset($_SESSION['cus_id'])) {
	header("location:./login.php");
}?>



	<?php

include 'dbh.inc.php';
$customer_id = $_SESSION['cus_id'];

$date = $_POST['date'];

$no_of_people = $_POST['members'];

$time = $_POST['time'];

$sql = "select * from reservations where date = '{$date}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	$i = 0;

	$tym = '0';
	while ($row = $result->fetch_assoc()) {
		$i++;

		if ($time == $row['time']) {

			$tym = '1';

			$timee = $row['time'];

		}

		if ($tym == '1') {

			$sql2 = "select * from reservations where date = '{$date}' and time = '{$timee}' ";

			$result = $conn->query($sql2);

			if ($result->num_rows > 0) {

				$i = 0;

				while ($row = $result->fetch_assoc()) {
					$i++;

					if ($no_of_people == $row['table_type']) {

						echo "<script> alert('this table booked already! try changing date or time');

						window.location.replace('../tablenew.php'); </script>";

					} else {

						$sql = "INSERT INTO reservations(cus_id,date,time,table_type) VALUES ('" . $customer_id . "','" . $date . "','" . $time . "','" . $no_of_people . "');";
						mysqli_query($conn, $sql);

						echo "<script> alert('Your table successfully reserved');

						window.location.replace('../tablenew.php'); </script>";

					}

				}

			}

		} elseif ($time != $row['time']) {

			$sql = "INSERT INTO reservations(cus_id,date,time,table_type) VALUES ('" . $customer_id . "','" . $date . "','" . $time . "','" . $no_of_people . "');";
			mysqli_query($conn, $sql);

			echo "<script> alert('Your table successfully reserved');

			window.location.replace('../tablenew.php'); </script>";

		}

	}

} else {

	$sql = "INSERT INTO reservations(cus_id,date,time,table_type) VALUES ('" . $customer_id . "','" . $date . "','" . $time . "','" . $no_of_people . "');";
	mysqli_query($conn, $sql);

	echo "<script> alert('Your table successfully reserved');

	window.location.replace('../tablenew.php'); </script>";

}

$message = '<table><tr><td>Name:  </td>  <td> ' . $name . '  </td></tr>
			  <tr><td> Email:  </td>  <td> ' . $email . '  </td></tr>
			  <tr><td> Phone:  </td>  <td> ' . $phone . '  </td></tr>
			  <tr><td> Address:  </td>  <td> ' . $address . '  </td></tr>
			  <tr><td> Reserve Date:  </td>  <td> ' . $date . '  </td></tr>
			  <tr><td> Reserve Time From:  </td>  <td> ' . $from_time . '  </td></tr>
			  <tr><td> Reserve Time To:  </td>  <td> ' . $to_time . '  </td></tr>
			  <tr><td> No Of People:  </td>  <td> ' . $no_of_people . '  </td></tr><table>';

//$email1 = "navapprashath@gmail.com";
$to = $email;
$subject = "Reserve Details";
$headers = "From: " . $email1 . "\r\n";
//$headers .= "Reply-To: navapprashath@gmail.com\r\n";
//$headers .= "CC:  navapprashath@gmail.com\r\n";
//	$headers .= "BCC: navapprashath@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);

//header("Location: ../tablenew.php?reservation_added_successfully");

?>
