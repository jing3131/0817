<?php
function cmp($a, $b)        // $a - $b 快速排序法
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;

    // return $a - $b;
    // return $b - $a;      遞減
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");                           // usort($陣列, "function名稱") -> user sort
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>