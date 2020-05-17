<?php

// $la = [];
// $lb = [];

// foreach ($argv as $key => $value) {

//     for ($key; $key >= 1; $key++) 
//     { 
//         echo "[$key] -> $value" . PHP_EOL;

//         break;
//     }
// }

$la = $argv;
array_shift($la);

$lb = array();
$output = "";

//BOITE A OUTILS // 

//PUSH
function pa(&$la, &$lb, &$output)
{
    // var_dump($lb);
    array_unshift($la, array_shift($lb));
    // var_dump($lb);
    $output .= " pa";
}

function pb(&$lb, &$la, &$output)
{
    array_unshift($lb, array_shift($la));
    $output .= " pb";
}


// SWAP

function sa(&$la, &$output)
{
    $un_a = $la[0];
    $la[0] = $la[1];
    $la[1] = $un_a;
    $output .= " sa";
}

function sb(&$lb, &$output)
{
    $un_b = $lb[0];
    $lb[0] = $lb[1];
    $lb[1] = $un_b;
    $output .= " sb";
}

// ROTATE

function ra(&$la, &$output)
{
    array_push($la, array_shift($la));
    $output .= " ra";
}

function rb(&$lb, &$output)
{
    array_push($lb, array_shift($lb));
    $output .= " rb";
}

function rr(&$la, &$lb, &$output)
{
    ra($la, $output);
    rb($lb, $output);
    $output .= "rr";
}

function rra(&$la, &$output)
{
    array_unshift($la, array_pop($la));
    $output .= " rra";
}

function rrb(&$lb, &$output)
{
    array_unshift($la, array_pop($lb));
    $output .= " rrb";
}


function rrr(&$la, &$lb, &$output)
{
    rra($la, $output);
    rrb($lb, $output);
    $output .= " rrr";
}

//TRI

function sorting_process(&$la, &$lb, &$output)
{
    if (count($la) == 1) {
        echo PHP_EOL;
    } 
    else
    {
        $trie_la = $la;
        $trie_lb = $lb;

        while ($la !== sort($trie_la)) 
        {
            $smaller = min($la);
            $search_smaller = array_search($smaller, $la);
            $taille_la = count($la);

            if ($la[0] !== $smaller) 
            {
                if ($smaller < $la[0]) {
                    rra($la, $output);
                } 
                else 
                {
                    ra($la, $output);
                }
            } 

            else 
            {
                pb($lb, $la, $output);
            }
            
            while ($lb !== sort($trie_lb)) {
                pa($la, $lb, $output);
            }
        }
        
    
    }
    echo trim($output) . PHP_EOL;
}


sorting_process($la, $lb, $output);
