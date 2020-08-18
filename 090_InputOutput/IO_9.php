<?php
header("Content-Type: image/png");      // 圖片要轉碼 Content-Type:

$filename = "cc.png";
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));       // 一次讀一定的資料，分段處理，減少資源
fclose($filename);

?>