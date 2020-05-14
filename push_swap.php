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
// echo "ceci est mon argv" . print_r($argv) . PHP_EOL;

$la = [];
$lb = [];

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
    
    
}

if (count($la) > 1)
{
    $count = count($la);
    if($la === sort($lb))
    {
        push();
    }
}



function push()
{

}


function swap()
{

}

function rotate()
{
    
}

// $newtable = array_fill(1,$key,$value);
// var_dump($newtable);
//     sort($newtable);
    // print_r($newtable);


// echo $value . PHP_EOL;
// var_dump($i);
