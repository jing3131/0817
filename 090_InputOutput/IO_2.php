<?php

$fileDir = dirname ( __FILE__ );				// 資料夾名稱
$fileResource = opendir ( $fileDir );			// 開檔

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<p>File list:</p>
	<ul>
	<?php while ($item = readdir($fileResource)) : ?>			<!-- readdir()讀檔   可使用 : end當作{} 以方便閱讀--> 
		<li><?php echo $item; ?></li>
	<?php endwhile; ?>
	</ul>

<?php closedir($fileResource); ?>
</body>
</html>
