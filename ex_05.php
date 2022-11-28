<?php
session_start();

function my_add_to_session(string $key, string $value)
{
    $_SESSION[$key]=$value;
    $_SESSION[$key].="titi";
    //echo "$_SESSION[$key]\n";
}

//my_add_to_session("name","toto");