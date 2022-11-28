<?php

$_POST=array("str_one"=>"dadadamdeo", "else"=>"esle", "str_two"=>"didi");
function post_levenshtein_score()
{
    if(!isset($_POST["str_one"]) || !isset($_POST["str_two"]))
    {
        return NULL;
    }
    
    if(isset($_POST["str_one"]) && isset($_POST["str_two"]))
    {   
        $one=strval($_POST["str_one"]);
        $two=strval($_POST["str_two"]);
        
        $str1=str_split($one, 1);
        $str2=str_split($two,1);
        //print_r($str1);
        $max= (strlen($one)>=strlen($two)) ? strlen($one) : strlen($two);
        $count= (strlen($one)>=strlen($two)) ? strlen($one) : strlen($two);
        //echo $count;
        for($i=0;$i<$count;$i++)
        {   
            //echo $value1;
            for($j=0;$j<$count;$j++)
            {
                if( $str1[$i] == $str[$j])
                {
                    $count--;
                }
                else
                {
                    $count++;
                }

                $j++;
            }
            $i++;
        }
        
        
        return ($max - $count)*(-1);
    }
}

//$i = post_levenshtein_score();
//echo $i;