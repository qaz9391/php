<?php
    session_start(); //開啟 session 功能（因為我們要刪掉裡面的 id）

    unset($_SESSION["id"]); //把使用者的登入資料清掉，等於是登出

    echo "登出成功...."; //跟使用者說你已經登出了

    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>"; //3 秒後自動跳回登入畫面
?>
