<?php
 require("pub.php");
 require("line.php");

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['1'])) {
	
	send_LINE($events['1']);
		
	echo "LED IS ON";
	}
else if (!is_null($events['0'])) {
	
	send_LINE($events['0']);
		
	echo "LED IS OFF";
	}
if (!is_null($events['events'])) {
	echo "line bot";
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back

			$Topic = "NodeMCU1" ;
			getMqttfromlineMsg($Topic,$text);
			   
			
		}
	}
}

?>
