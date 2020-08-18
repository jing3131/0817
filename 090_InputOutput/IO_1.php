<?php

echo "Path and FileName:" . __FILE__ . "<br />";            // __FILE__  可告訴現在檔案所存放的位置(路徑)
echo "Path: " . dirname ( __FILE__ ). "<br />";
echo "Filename: " . basename ( __FILE__ ) . "<br />";       // basename ( __FILE__ ) 目前的檔案名稱
echo "Filesize: " . filesize ( __FILE__ )?>
