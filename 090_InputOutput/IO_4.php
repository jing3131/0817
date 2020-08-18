<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );						// file(檔案名稱) 會傳入一個陣列
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";		// htmlspecialchars 如果檔案中含有< > 不當成html，顯示原內容(避免資安問題)
}

?> 