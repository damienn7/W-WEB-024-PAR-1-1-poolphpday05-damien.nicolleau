<?php

function my_add_to_cookie(string $key, string $value)
{
    $_COOKIE[$key] = $value;
   /*
   foreach($_COOKIE as $key => $value)
    {
        echo "$key => $_COOKIE[$key]";
    }
    */
}

//my_add_to_cookie("name","toto");