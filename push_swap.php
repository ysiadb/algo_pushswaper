<?php

$la = $argv;
array_shift($la);

$lb = [];
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
    array_unshift($lb, array_pop($lb));
    $output .= " rrb";
}


function rrr(&$la, &$lb, &$output)
{
    rra($la, $output);
    rrb($lb, $output);
    $output .= " rrr";
}

//TRI

function  sorting_la(&$la, &$lb , &$output)
{
    // $smaller_la = min($la);

    switch ($la) {

        case $la[0] > end($la):
            ra($la, $output);

            break;

        case $la[0] < $la[1]:
            pb($lb, $la, $output);
           
            break;

        case $la[0] == $la[1]:

            pb($lb, $la, $output);
           
            break;

        case $la[0] > $la[1]:
            sa($la, $output);
            break;

        case end($la) < $la[0] :
            rra($la, $output);
        break;

        case end($la) > $la[0] :
            ra($la, $output);
        break;
    }
}


function sorting_lb(&$lb, &$la, &$output)
{
    // $smaller_lb = min($lb);

    while(count($lb) !== 0)
    {

    switch ($lb) {
        case $lb[0] < end($lb):
            rb($lb, $output);
         
            break;

        case count($lb) == 1:
            pa($la, $lb, $output);
           
            break;

        case $lb[0] > $lb[1]:
            pa($la, $lb, $output);
            
            break;

        case $lb[0] == $lb[1]:
            pa($la, $lb, $output);
            
            break;

        case $lb[0] < $lb[1]:
            sb($lb, $output);
           
            break;

        case end($lb) < $lb[0]:
            rrb($lb, $output);
            break;

        case end($lb) > $lb[0]:
            rb($lb, $output);
            break;
    }
}
}


function sorting_process(&$la, &$lb, &$output)
{
    $test = $la;
    sort($test); 

  while ($la !== $test)
  {
    if(count($la) == 1)
    {
        sorting_lb($lb, $la, $output);
    }
      elseif(count($la) > 1)
      {
          sorting_la($la, $lb, $output);
      }
      
      
  }
   
    echo trim($output) . PHP_EOL;
}


sorting_process($la, $lb, $output);

// pb($lb, $la, $output);
