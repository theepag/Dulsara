	<?php
	session_start();

	if (isset($_POST['submit'])) {

		include 'dbh.inc.php';

		$uid = mysqli_real_escape_string($conn, $_POST['uid']);

		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		// Error handlers
		// check inputs are empty

			if (empty($uid) || empty($pwd)) {

			}

			else {
				$sql = "SELECT * FROM customer WHERE username='$uid';";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				

				if ($resultCheck < 1 ) {
					header("Location: ../login.php?login=error1");
					exit();
				} else {
					if ($row =mysqli_fetch_assoc($result)) {
						//De- hashing the password
						$hashedPwdCheck = password_verify($pwd,$row['password']);



		
						if ($hashedPwdCheck == false) {
								header("Location: ../login.php?login=error");
								exit();
							
						}
						else if ($hashedPwdCheck == true) {
							$_SESSION['u_id'] = $row['username'];

							header("Location: ../login.php?login=success");
							exit();
						} 

					}
				}

			}

	} else {
		header("Location: ../login.php?login=error3");
		exit();

	}
