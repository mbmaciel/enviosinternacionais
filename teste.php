<?php

$request = new HttpRequest();
$request->setUrl('https://apis-sandbox.fedex.com/oauth/token');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Content-Type' => 'application/x-www-form-urlencoded'
));

$input = array(
	'grant_type' => 'client_credentials',
	'client_id' => 'l7312d077ac462464da23f9e455a86ac2b',
	'client_secret' => 'c0b6c7dcf6f640a0a7615385d54bbdc8',
	
);

$input = json_encode($input);

$request->setBody($input); // 'input' refers to JSON Payload

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}