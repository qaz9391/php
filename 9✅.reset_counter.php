<?php
    session_start();               //開啟session
    unset($_SESSION["counter"]);   //使用unset()匡中的重置器
    echo "counter 重置成功！！！！";     //顯示訊息通知已重置成功！！！！
    echo "<meta http-equiv=REFRESH content='1; url=8.counter.php'>";//使用網頁的標籤然後1秒後就會自動跑回去主頁面
?>
