<?php

//class that will handle the api call and return data

class ForthData{
    public function getEndpointData(){
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
            'Authorization: 5f434154-ca12-3034-9dcd-0247e476b0ac',
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}