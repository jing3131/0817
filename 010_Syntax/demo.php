<?php 

//     $userName = "a";
//     echo $userName;
//     echo "user name: $userName, Hello...";          // 雙引號可以參雜變數名稱
//     echo "<br>";
//     echo 'user name: $userName';

//     echo "<br>";
//     $x = 12;
//     $y = "34";
//     $result = $x+$y;                                // + 永遠做運算相加
//     echo $result;
//     echo "<br>";
//     $results = $x.$y;                               // . 永遠做字串相接
//     echo $results;


//     echo "<br>";
//     $s = <<< AAA
//         Line ??? <br>
//         Line !!! <br>
//     AAA;
//     echo $s;                                        // <<< 代稱   可以輸入多行文字   代稱;

//     $x = 1;
//     $y = "0x10";             // "0x10" -> 字串   0x10 -> 數字(16進位)
//     $z = 0x10;
//     echo $x+$y."<br>";
//     echo $x+$z;

//     // phpinfo();              // 查詢設定檔   php.ini
//     // error_reporting = E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR 什麼訊息要報告
//     // display_errors = on
//     // 更改完需重新啟動MAMP

//    // === 型態相等，並且內容一樣
//    // 

//    echo "<br>";
//    $x = 100;
//    $y = &$x;                 // &紀錄x的記憶體  -> x的記憶體 = y的記憶體

//    $x = 200;
//    echo $y . "<br>";
//    $y = 300;
//    echo $x;
    
//    echo "<br>";

//     $x = 100;
//     function foo(){ 
//         if(isset($x)){
//             echo $x . "<br>";
//         }
//         else{
//             echo "not found <br>";
//     }
//         global $x;                  // 需要宣告為global才能看到全域變數
//         echo "foo" . $x;
//     }
//     foo();

    $s= "01234567";
    $result = substr($s, 3, 4);     // substr(變數, 從哪開始, 取幾個)
    echo "substr：" .$result . "<br>";
    $result = str_replace("12", "XX", $s);      // str_replace(字串,取代的字串,變數)
    echo "str_replace：" . $result . "<br>";

    $pos = strpos($s, "012", 0);      // strpos(變數, 想搜尋的字串, 從哪裡開始)，如果找不到就return false(0的位置被找到 -> 0在if的判斷為false) 可用===判斷、在字串最前面加入填充物
    if($pos !== false){
        echo $pos;
    }
    else{
        echo "false";
    }



?>