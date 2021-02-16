<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/engine-rest/deployment/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('upload'=> new CURLFILE('/home/vs-workspace/camunda-playground/ict.bpmn')),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: multipart/form-data',
    'Authorization: Basic ZGVtbzpkZW1v'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
