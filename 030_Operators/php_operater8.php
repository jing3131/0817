<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php");      // @ 如果有出現錯誤訊息，不顯示，但依然不向後執行
    echo "flag 2<br>";

?>