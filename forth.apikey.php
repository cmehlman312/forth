<?php

//Exmaple of using the apikey
// This still does not work, no data being returned from curl call
// but this is the format that would be used for this type of usage

class ForthApiKey extends ForthData{
    public function sumStatusApiKey(){
        $forthdata = new ForthData();
        $json_data = $forthdata->getEndpointData();
        $decoded_data = json_decode($json_data, true);
        $parsed = $decoded_data['response']['results'];

        $segment = [];

        foreach ($parsed as $key => $value) { 
            $sumValue = 0;
            foreach ($parsed[$key] as $key2 => $value2) { 
                $sumValue += +$value2['status'];
            }
            $segment[$key]= $sumValue;
        }
        print_r($segment);
    }
}

$obj = new ForthApiKey();
echo $obj->sumStatusApiKey();