<?php

//TEST PROCEDURAL

// var_dump($argv[1]);


// $la = $argv[1];

// $lb = str_split($la);
// sort($lb);
// print_r($lb);


// if($lb > 1)
// {
//     switch($lb)
//     {
//         case "sa" : sort($lb[1], $lb[2]);
//     }
// }


foreach ($argv as $key => $value) {

    // echo "[$key] -> $value" . PHP_EOL; 

    for ($key; $key >= 1; $key++) 
    { 
        echo "[$key] -> $value" . PHP_EOL;

        // if($key > 0)
        // {
        //     $key++;
        //     print_r($key);
        // }

        // $key++;
        // echo $key;

        break;
    }
    // echo $value . PHP_EOL;
}

// var_dump($i);
