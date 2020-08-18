<?php
if (isset ( $_POST ["btnOK"] )) {
	processFile ( $_FILES ["file1"] );			// $_FILES["檔案原始名稱"]
}
function processFile($objFile) {
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	
	// 將使用者選取的檔案(已上傳的檔案)搬出去指定位置
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );			// tmp_name 一個臨時性檔案(來源檔案的亂數名稱)  "./" . $objFile ["name"]要搬去的位置與檔案名稱
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";		// $objFile ["type"] 型態
	echo "File size: " . $objFile ["size"] . "<br />";		// $objFile ["size"] 檔案大小
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<!--在Clinet端
		input type="file" 可以讓使用者選擇檔案開啟 
		enctype="multipart/form-data" 表單的編碼方式
	-->
	<form method="post" enctype="multipart/form-data" action="">
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>