<?php

function sum($max){
    return $max*2;
}

echo sum(5);

//1

echo "\n";

function f($a, $b){
    return $a+$b;
    
}
echo f(5,6);

echo "\n";
//2


function a($arr){
    $result = 1;
    foreach($arr as $number){
        $result = $number*$result;
    }
    return $result;
}

$array = array(1,5,9,7,8);



echo a($array);

echo "\n";



function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            
            $max_number = $a;
            
        }
        
    }
    return $max_number;
    
}





?>



 
 