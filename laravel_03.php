<?php
//課題1
$name = "miyamoto_yuko";
if ($name == "miyamoto_yuko") {
    echo "私はmiyamoto_yukoです";
    echo "\n";
}
else {
  echo "私はmiyamoto_yukoではありません";
  echo "\n";
}
  
//課題2
$total = 0;
for($i = 1; $i <=1000; $i++){
  $total +=$i;
}
  echo $total;
  echo "\n";
  
//課題3
$fluits = array("apple","orange","banana","pear","fig");

foreach($fluits as $fluits){
  echo "要素は" . $fluits;
  echo "\n";
}

//課題4
//for文の始めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){
  //5で割り切れたら{}内を実行する
  if($i %5 === 0){
    echo $i;
    echo "\n";
  }
}