<?php
$access_token = 'XWdRGE9JooNZ+Ht8VQ5z8+AtcRD0hic06+SyyU5NlUYDuxzVtaJoctWtSb6WuIEoBdyKo3tFN8qkKPPWK6HxnbAjUNQUyZaJ0t0Y3R9RydRhQCz1j5rN6GAq478oAefRAeRjAAkHsR27fQbhLZEDogdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
