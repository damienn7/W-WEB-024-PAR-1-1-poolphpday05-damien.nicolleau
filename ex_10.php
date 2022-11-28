<?php
//$_GET=array("nbr_elem"=>5,"var1"=>"premier test", "var2"=>"deuxième test", "var3" => "dernier test", "directrice" => "Sophie","pangolinette"=>"moulinette");
function my_get_weird_info()
{
    if(isset($_GET)){
        $i=0;
        foreach($_GET as $key => $value)
        {
            if($i < 5)
            {
                echo '$_GET["'.$key.'"] => '.$value."\n";
                $i++;
            }

        }
    }
}

//my_get_weird_info();