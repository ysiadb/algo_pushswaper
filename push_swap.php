<?php

//TEST PROCEDURAL

// var_dump($argv[1]);


$la = $argv[1];

$lb = str_split($la);
sort($lb);
print_r($lb);


if($lb > 1)
{
    switch($lb)
    {
        case "sa" : sort($lb[1], $lb[2]);
    }
}

//TEST POO
?>