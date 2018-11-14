  <?php
  

function send_LINE($msg){
 $access_token = 'XWdRGE9JooNZ+Ht8VQ5z8+AtcRD0hic06+SyyU5NlUYDuxzVtaJoctWtSb6WuIEoBdyKo3tFN8qkKPPWK6HxnbAjUNQUyZaJ0t0Y3R9RydRhQCz1j5rN6GAq478oAefRAeRjAAkHsR27fQbhLZEDogdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uf8aaef48cb1bdac5651c2b666115cb8e',
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

