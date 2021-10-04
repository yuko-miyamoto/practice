<?php
//課題1
function sum($max){
    return $max*2;
// 数値を2倍に返すので単純にsum()内を*2
}
echo sum(2);
?>

<?php
//課題2
function add($a, $b){
    return $a + $b;
// $a + $bに1を代入
}
echo add(1, 1);
?>

<?php
//課題3
$arr = array(1, 3, 5, 7, 9);
$count = array_product($arr);
// array_product()配列の積の関数
echo $count;
?>

<?php
//課題3
// foreach ver. イマイチ使い方がよくわからない
function mul($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
    echo mul(array(1, 3, 5, 7, 9));
?>

<?php
//課題4
function max_array($arr){
// ↓最大値に配列の最初の値を代入して初期化
 $max_number = $arr[0];
 // max_arrey()を$aに格納
 foreach($arr as $a){
// $max_numberは$aより小さいか等しい
     if($max_number<$a){
         $max_number = $a;
     }
 }
 // 最大値を取得
 return $max_number;
}
// 配列の中から最大値を呼び出す
 echo max_array([1, 3, 5, 7, 9]);
 echo "\n";
?>

<?php
//課題5 strip_tags
$str = "<h1>課題5</h>";
// HTMLタグを取り除く
echo strip_tags($str);
?>

<?php
// 課題5 array_push
$fruits = array("apple", "orange", "lemon");
// 配列の最後に要素を追加
array_push($fruits, "peach", "cherry");
echo count($fruits);
?>

<?php
//課題5 array_merge
$array1 = array("fruits" => "apple", 1, 2);
$array2 = array("a", "b", "fruits" => "banana", 3 => "lemon", 4);
$array3 = array(3 => "peach", 4, 5);
$result = array_merge($array1, $array2, $array3);
// 複数の配列を結合する。配列に同じ文字列があった場合、上書きする。
print_r($result);
?>

<?php
//課題5 time,mktime
echo date('Y/m/d H:i:s', mktime(22,0,0,10,1,2021));
?>

<?php
//課題5 date
echo date('Y');
?>
