<?php
    session_start(); //啟動session，這樣我才能操作session裡面的變數
    unset($_SESSION["counter"]); //把session裡面的counter這個變數刪掉，等於是重置了
    echo "counter重置成功...."; //顯示提示文字讓使用者知道已經重置了
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //兩秒後自動跳回counter的那頁
?>
