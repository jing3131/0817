<?php
	$contents = file_get_contents('data.txt');			// file_get_contents('檔名') 把檔案內容用字串回傳出來
	echo (str_replace("\r\n", "<br />", $contents));
?>