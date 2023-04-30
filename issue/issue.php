<?php
// example code
echo "課題1\n\n";
// 論理積&&（AND）演算子はA'かつ'Bの場合：2つの値が両方とも true の場合に true を返しそうでない場合に false

$value1 = true;
$value2 = true;

$result = $value1 && $value2;
var_dump($result);


$value1 = true;
$value2 = false;

$result = $value1 && $value2;
var_dump($result);


$value1 = false;
$value2 = true;

$result = $value1 && $value2;
var_dump($result);

$value1 = false;
$value2 = false;

$result = $value1 && $value2;
var_dump($result);
echo "----------------------------------\n";
echo "課題2\n\n";
// 論理積||（OR）演算子はA'または'Bの場合：両方とも false の場合 false、それ以外は true
$value1 = true;
$value2 = true;

$result = $value1 || $value2;
var_dump($result);

$value1 = true;
$value2 = false;

$result = $value1 || $value2;
var_dump($result);

$value1 = false;
$value2 = true;

$result = $value1 || $value2;
var_dump($result);

$value1 = false;
$value2 = false;

$result = $value1 || $value2;
var_dump($result);
echo "----------------------------------\n";
echo "課題3\n\n";

$value1 = true;
$value2 = false || true;

$result = $value1 && $value2;
var_dump($result);

$value1 = true || false;
$value2 = null || 1;

$result = $value1 && $value2;
var_dump($result);

$result = true && false || true;
var_dump($result);

$result = true || false && true;
var_dump($result);

$result = true && false || true;
var_dump($result);

$value1 = 10;

$result = !!$value1;
var_dump($result);

$value1 = null;

$result = !!$value1;
var_dump($result);

$value1 = '';

$result = !!$value1;
var_dump($result);
echo "----------------------------------\n";
echo "課題4-1\n\n";
//すみませんちょっと認識合ってるか微妙です。。。
// ! 否定演算子で真偽値を反転
// false || true となり falseになるのでhoge
$a = true;
$b = false;

if (!$a && !$b) {
    echo 'fuga';
} else {
    echo 'hoge'."\n";
}

echo "----------------------------------\n";
echo "課題4-2\n\n";
$a = true;
$b = false;
// false || true となり左辺がfalseの場合右辺評価の為trueになりfuga
if (!$a || !$b) {
    echo 'fuga'."\n";
} else {
    echo 'hoge';
}

echo "----------------------------------\n";