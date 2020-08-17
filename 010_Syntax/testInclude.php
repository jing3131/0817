<?php
  include("testDefine.php");              // include() 可以複製testDefine的內容   (將獨立的testDefine檔案貼進來)
  // require("testDefine.php");
  $total = 100;

  include_once("testDefine.php");         // include_once() 沒有引用過才執行

  require("testDefine.php");              // require()、require_once  態度較強硬，必要的存在，如果無法執行(Ex: 找不到檔案)會強制停止程式

  echo test . "<br>";

  echo $total;
?>