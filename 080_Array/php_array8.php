<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);				// 破壞性排序(原陣列會被改變) -> 照字串順序排列
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray);			// 自然排序法 -> 按照數字大小排列
	var_dump($testArray);
?>
