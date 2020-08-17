<?php

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";

unset($x);                          // 將x的記憶體刪除，y依然為原本的記憶體區塊
echo "y = $y </br>";

?>