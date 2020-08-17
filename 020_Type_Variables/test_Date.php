<?php
  $x = getdate();               // getDate() 是一個陣列
  echo gettype($x), "<br>";
  
  $x = date('Y-m-d H:i:s');     // date() 是一個字串
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  $x = gmdate('Y-m-d H:i:s');
  echo $x, "<br>";
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
?>