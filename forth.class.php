<?php

//Exmaple of parsing the data wnd summing data with a class

class Forth {
    public function sumStatus(){
        $json_data = file_get_contents('example_data.json');
        $decoded_data = json_decode($json_data, true);
        $parsed = $decoded_data['response']['results'];

        $segment = [];

        foreach ($parsed as $key => $value) { 
            $sumValue = 0;
            foreach ($parsed[$key] as $key2 => $value2) { 
                $sumValue += +$value2['status'];  //make sure to convert string to number by prefixing with +
            }
            $segment[$key]= $sumValue;
        }
        print_r($segment);
    }
}

$obj = new Forth();
echo $obj->sumStatus();