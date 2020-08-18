<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");				// fopen("檔名", "r")開檔 (r or w)
while (!feof($f))							// feof($f) end of file 是否為檔案結尾處
{
	$line = fgets($f);						// fgets($f) 取得一行資料(字串)(不包含換行符號)
	$sData .= Trim($line) . "<br>";
}
fclose($f);									// fclose($f) 關檔
echo $sData;

?>
