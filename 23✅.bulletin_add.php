<?php
    error_reporting(0);//關閉錯誤訊息顯示
    session_start();//啟用session

    //檢查是否有登入進去
    if (!$_SESSION["id"]) {
        echo "please login first";      //如果還沒登入它會提示並跳轉回登入畫面
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else {
        //使用者登入後開始新增佈告裡面的程序
        
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //連接到資料庫

        //建立SQL新增語句，將表單的資料插入bulletin表格
        $sql = "insert into bulletin(title, content, type, time) 
                values('{$_POST['title']}', '{$_POST['content']}', {$_POST['type']}, '{$_POST['time']}')";

        //執行SQL指令，如果失敗就會顯示錯誤的提示畫面
        if (!mysqli_query($conn, $sql)) {
            echo "新增命令錯誤";
        }
        else {
            echo "新增佈告成功，三秒鐘後回到網頁";//執行成功就會顯示成功訊息，並在1秒後跳回公告畫面
            echo "<meta http-equiv=REFRESH content='1, url=11.bulletin.php'>";
        }
    }
?>
