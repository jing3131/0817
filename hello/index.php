<?php
    // var_dump($_POST);                                    // var_dump() 方便除錯

    session_start();                                        // 使用session需宣告
    if(isset($_POST["okbtn"])){                             // =  if($_POST["okbtn"])
        $_SESSION["who"] = $_POST["userNameTextBox"];       // 將資料放進session陣列
        header("Location: hello.php");                      // header("Location: 網址、檔案")  -> 轉址
        exit();
    }
    else{
        echo "first time";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">                         
    <!-- method="post"   -> $_POST["name"]  
        action=".php" 要送往的地方          -> 不填表示把內容傳給自己
    -->

    Your name:
    <input type="text" name="userNameTextBox">
    <input type="submit" name="okbtn" value="OK">
    <br>
    
    </form>
    
</body>
</html>