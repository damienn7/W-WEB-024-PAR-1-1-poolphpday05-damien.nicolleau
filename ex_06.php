<?php

function my_print_session(string $key)
{
    //$_SESSION[$key]="toto";
    if(isset($_SESSION[$key]))
    {
        echo "$_SESSION[$key]\n\n";
    }
}

//my_print_session("name");