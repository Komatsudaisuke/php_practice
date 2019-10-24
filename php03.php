<?php
$name = "KOMATSU";

if ($name == "KOMATSU") {
  echo "私はKOMATSUです。";
 
} else {
  echo "KOMATSUではありません。";
} 
 echo "\n";


$total = 0;

for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("grape","orange","apple","mango","melon");

foreach($fruits as $fruits){
 echo "好きなフルーツ" . $fruits;
 echo "\n";
}

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
 if($i % 5 == 0){
  echo $i;
 }
 
}