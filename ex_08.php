<?php

//$_POST["phelix"]="hudadatata";

function helix_post_finder()
{
    if(!isset($_POST['phelix']))
    {
        return NULL;
    }
    else
    {
        return $_POST['phelix'];
    }
}

//var_dump(helix_post_finder());