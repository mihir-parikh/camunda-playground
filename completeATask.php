<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/engine-rest/task/4a630277-71a4-11eb-9279-0242ac1b0004/complete',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"variables":
    {"teamName": {"value": "Indian Cricket team"}}
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ZGVtbzpkZW1v'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
