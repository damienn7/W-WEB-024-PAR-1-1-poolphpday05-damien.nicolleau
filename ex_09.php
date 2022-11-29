<?php

//$_POST=array("str_one"=>"Sophie", "else"=>"esle", "str_two"=>"Julien");
function post_levenshtein_score()
{
    if(!isset($_POST["str_one"]) || !isset($_POST["str_two"]))
    {
        return NULL;
    }
    
    if(isset($_POST["str_one"]) && isset($_POST["str_two"]))
    {   
        return levenshtein($_POST["str_one"],$_POST["str_two"]);
    }
}

//$i = post_levenshtein_score();
//echo $i;