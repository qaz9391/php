<?php
    error_reporting(0);    //關閉錯誤訊息顯示
    session_start();    //啟用session

    //如果還沒登入id，就會顯示提示並跳回登入畫面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";     //1秒後跳回到入畫面
    }
    else {
        //登入後，開始進行資料庫的更新
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //建立資料庫連線

        $sql = "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'";   //執行SQL將指定ID的密碼更新為新的

        // 更新失敗，則顯示錯誤提示
        if (!mysqli_query($conn, $sql)) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='1, url=18.user.php'>";   //1秒後回到使用者列畫面
        }
        else {
            echo "修改成功，三秒鐘後回到網頁";       //更新成功後會通知使用者然後就會跳轉回列表
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
        }
    }
?>
