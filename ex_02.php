<?php


/*
function declare_globals()
{
    global $a;
    global $b;
    global $c;
    global $d;
    global $e;
    global $f;
    global $g;
    global $h;
    global $i;
    global $j;

    $a = "hello";
$b = "world";
$c = "le";
$d = "monde";
$e = "n’est";
$f = "que";
$g = "PHP";
$h = "!";
$i = 1;
$j = true;
    echo $GLOBALS['a'];
}

declare_globals();
*/


function my_aff_global(){
    
    foreach($GLOBALS as $key => $value)
    {
        if(is_string($value))
        {
            echo "$key => $value\n";
        }
    }
}

//my_aff_global();