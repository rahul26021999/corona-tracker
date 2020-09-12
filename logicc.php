<?php

$ch = curl_init("https://api.covid19india.org/data.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
$data=json_decode($result, true);
curl_close($ch);

// gettype($data);
// var_dump($data);
 
   foreach($data as $key =>$value){
       if($key== 'cases_time_series'){
       $days_count = count($value)-1;
       $days_count_prev= $days_count -1;}
      
   }

   foreach($data as $key =>$value){
    if($key== 'statewise'){
    $length_count = count($value)-1;
    $length_count_prev= $days_count -1;}
    
}

   
/*////////////////////////////////////////*/
//  Initiate curl
$chh = curl_init();
// Will return the response, if false it print the response
curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
// Set the url
$urll='https://api.covid19india.org/states_daily.json';
curl_setopt($chh, CURLOPT_URL,$urll);
// Execute
$resultt=curl_exec($chh);
// Closing
curl_close($chh);


$dat=json_decode($resultt, true);
//////////////////////////////////////////

   foreach($dat as $keyy =>$valuee){
    if($keyy== 'states_daily'){
        $cur_deceased = count($valuee)-1;
    $cur_recovered= $cur_deceased -1;
    $cur_confirmed=$cur_recovered-1;}
    
}
  
?>