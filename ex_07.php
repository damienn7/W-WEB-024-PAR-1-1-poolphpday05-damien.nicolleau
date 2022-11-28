<?php
    /*
    $_SESSION["name"]="toto";
    $_SESSION["email"]="titi";
    $_SESSION["pass"]="tata";
    */
function my_reset_session()
{
    foreach($_SESSION as $key => $value)
    {
        $key = NULL;
        $value=NULL;
        //echo $value;
    }
    //var_dump($_SESSION);
}

//my_reset_session();