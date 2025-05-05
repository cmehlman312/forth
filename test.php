<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.forthcrm.com/v1/contacts/592007728/transactions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: 5f434154-ca12-3034-9dcd-0247e476b0ac'
    // 'Cookie: __cf_bm=J2TqNYc9paD4kOsGNOWFGcpqbzHYgu0NmaVqsXLI.5Q-1746480683-1.0.1.1-wsZJIRttM9oVoD5EQmS7nUXT6sLFBWs7lBKmWcoX3iJmH3DzQqz9xg2whS3.dSb3HW7vyOUgGTPKDgreyv9kQMtugUKWb1Vsi7cyihW3xP8; _cfuvid=9p7ruz1afyoyWBxxIT9S4wnYqcM.QNX6nyKiqsC5wKQ-1746474468131-0.0.1.1-604800000'
  ),
));

$response = curl_exec($curl);

// curl_close($curl);
// echo $response;


$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
  $curl_errno= curl_errno($curl);
  if ($http_status==503)
    echo "HTTP Status == 503 <br/>";
  echo "Curl Errno returned $curl_errno <br/>";