<?php
header("content-type: text/html; charset=utf-8");

$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：<br>";
// foreach ($season as $value){					// foreach($陣列 as $value)
// 	echo $value, "<br>";						// each 可用 "," 相連字串
// }

foreach ($season as $key => $value){			// $key 找出key值   foreach($陣列 as $key => $value)
	echo $key, " => ", $value, "<br>";
}


?>