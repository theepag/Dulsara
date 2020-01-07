<?php 
                             include 'includes/dbh.inc.php';
                             

                             

{
  $id='778679549';
  echo $id;






    

 
	include ( "NexmoMessage.php" );
	/**
	 * To send a text message.
	 *
	 */
	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b3d7fe42', '2KQdWtecfjrzykgK');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( "94$id", 'MyApp', "Hello!" );
	// Step 3: Display an overview of the message
    echo $nexmo_sms->displayOverview($info);
    // Done!
   }
?>