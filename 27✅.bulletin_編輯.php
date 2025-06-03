<?php
     error_reporting(0);    //關閉錯誤訊息的顯示
     session_start();       //啟用session

    // 如果沒有登入則顯示提示並跳回到登入畫面
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; 
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>"; //1秒後跳轉登入頁
    }
    else {
        //成功登入後開始執行佈告修改
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//建立資料庫連線

        //執行升級SQL指令，將POST傳來的資料更新到bulletin表格裡
        //根據bid定位要修改的那一筆資料
        $sql = "update bulletin set 
                    title='{$_POST['title']}',
                    content='{$_POST['content']}',
                    time='{$_POST['time']}',
                    type={$_POST['type']} 
                where bid='{$_POST['bid']}'";

        //啊如果執行失敗會顯示錯誤訊息並跳回佈告欄列表裡
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
        else {
            //這邊是如果執行成功則會顯示成功訊息並跳回到佈告欄列表那
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }

?>
