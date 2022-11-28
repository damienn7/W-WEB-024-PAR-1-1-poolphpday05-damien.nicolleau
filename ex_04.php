<?php

function my_print_cookie(string $key)
{
    //$_COOKIE[$key] = "toto";

    if(isset($_COOKIE[$key]))
    {
        echo "$_COOKIE[$key]_END\n";
    }
}


//my_print_cookie("name");