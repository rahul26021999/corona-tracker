<?php

// $ch = curl_init("https://api.covid19india.org/data.json");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $result=curl_exec($ch);
// // $data=json_decode($result, true);
// curl_close($ch);

// gettype($result);
// var_dump($result);

$url = 'https://api.covid19india.org/data.json';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
var_dump($output);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo 'HTTP code: ' . $httpcode;

?>