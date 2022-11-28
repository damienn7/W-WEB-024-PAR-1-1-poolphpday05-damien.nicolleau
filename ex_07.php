<?php
    /*
    $_SESSION["name"]="toto";
    $_SESSION["email"]="titi";
    $_SESSION["pass"]="tata";
    */
function my_reset_session()
{
    var_dump($_SESSION);
    foreach($_SESSION as $key => $value)
    {
        //echo $value;
        unset($_SESSION[$key]);
        //echo $value;
    }
    var_dump($_SESSION);
}

//my_reset_session();