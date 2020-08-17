<?php
  $x = 3;
  if ($x >= 10 && foo())          // 前面不符合就不繼續比對  -> 效率高的放前面比對
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())           // 會比對兩者
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>