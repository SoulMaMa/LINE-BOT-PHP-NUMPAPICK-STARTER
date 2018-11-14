  <?php
  

function send_LINE($msg){
 $access_token = 'xnGldo0NBZ0wg43WElEDZPxqxWyOXrkZWzygukXAX1vRiPt8mK5Vx7DIxX1KxJbFBdyKo3tFN8qkKPPWK6HxnbAjUNQUyZaJ0t0Y3R9RydQREJJz0MqWtUSPsLc7agRSLK6gp3g+UfA7EIf6Sc9MygdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue77a191627f6ac91899e75d92264310c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

