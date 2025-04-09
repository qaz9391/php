<?php
    session_start();
    //啟動session才能用$_SESSION它的變數

    unset($_SESSION["id"]);
    //這句是登出使用者需要的帳號

    echo "登出成功!歡迎下次光臨~~~";
    //然後就會顯示登出成功的訊息

    echo "<meta http-equiv=REFRESH content='2; url=2.login.html'>";
    //使用meta的標籤，然後設定時間後就可以自動跳回登入頁面(我自己這邊是設2秒)
?>
