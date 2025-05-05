<?php

$json_answer = file_get_contents('example_data.json');

$answer = json_decode($json_answer, true);

$parsed = $answer['response']['results'];

$segment = [];

foreach ($parsed as $key => $value) { 
    $sumValue = 0;
    foreach ($parsed[$key] as $key2 => $value2) { 
        $sumValue += +$value2['status'];
    }
    $segment[$key]= $sumValue;
}

print_r($segment);