<?php
    session_start();
    // 啟動 session 才能操作 $_SESSION 它的變數

    unset($_SESSION["id"]);
    // 這句是登出使用者需要的代碼

    echo "登出成功!歡迎下次光臨~~~";
    // 然後就會顯示登出成功的訊息

    echo "<meta http-equiv=REFRESH content='2; url=2.login.html'>";
    // 使用網頁 meta 的標籤，設定秒數後會自動跳轉回登入頁面(我自己是設2秒)
?>
