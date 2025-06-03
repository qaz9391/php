<?php
     error_reporting(0);//關閉錯誤訊息顯示
      session_start();//啟動session功能

    //如果還沒登入進去（sessionid的話），顯示訊息後並跳轉回登入畫面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>";  //這邊是1秒後跳轉登入畫面
    }
    else {
        //成功登入，開始執行刪除使用者
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//建立連線到SQL資料庫（使用db4free的遠端資料庫）
        $sql = "delete from user where id='{$_GET["id"]}'";       //接收網址列的id參數，產生語句

        //這邊是執行刪除指令的地方
        if (!mysqli_query($conn, $sql)) {
            echo "使用者刪除錯誤";  //刪除失敗顯示錯誤的提示
        } else {
            echo "使用者刪除成功";  //刪除成功顯示成功的提示
        }

        echo "<meta http-equiv=REFRESH content='1, url=18.user.php'>";//不管成功或失敗，1秒後跳轉回使用者管理頁面
    }
?>
