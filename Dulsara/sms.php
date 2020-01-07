<?php

 session_start();

	
	include ( "NexmoMessage.php" );
	
	$con = mysqli_connect("localhost", "root", "", "restaurant");
        mysqli_select_db($con, "restaurant");
  $Q2 = "select * from customer where username='rok' and mobile='$mb'; 
        $result = mysqli_query($con, $Q2);
	
	

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b58445ed', 'HMECAa86rqIMmOn6');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '94$mb', 'udskuhfkuds', 'nghgjgjgjjhgjhhjfj!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>