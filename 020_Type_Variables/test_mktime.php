<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);    // mktime()時分秒月日年
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);
?>
