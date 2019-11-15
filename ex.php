<?php

function put($name){
    $game = "ドラクエ";
    echo $name . "君は".$game. "をプレイしています。";
}

put("堀井");

echo "\n";

 $array = [1, 2, 3, 4, 5];
 foreach($array as $example){
     echo $example;
 }
 
echo "\n";

$monster = [
    'モンスター1' => 'スライム',
    'モンスター2' => 'ドラキー',
    'モンスター3' => 'ぐんたいアリ',
    'モンスター4' => 'オオナメクジ'
     ];

foreach ($monster as $key => $example){
    echo '最初の方に戦った'. $key. '匹目は、'.$example.'です。<br>';
}

echo "\n";

$damage = 100;
if($damage >=110){
    echo"まもののむれを倒した！";
    
}else{
    echo"まものは様子を見ている...";
    
}

echo "\n";

$boss = array("ドラゴン","ゴーレム","竜王");
echo $boss[2];

echo "\n";

$exp = array("メタルスライム" =>"1000exp","はぐれメタル" => "10000exp","メタルキング" => "50000exp");
echo $exp["はぐれメタル"];


?>
