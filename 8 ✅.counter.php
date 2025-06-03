<?php
    session_start();  //這行是要啟動 session，讓我可以在不同網頁間記住使用者的資料

    // 這邊我檢查 session 裡面有沒有叫 counter 的變數
    if (!isset($_SESSION["counter"]))    
        $_SESSION["counter"] = 1;       // 如果沒有的話，我就把它設成 1，代表第一次進來
    else
        $_SESSION["counter"]++;         // 如果有的話，就把它加 1，表示又重新整理一次網頁

    // 然後我把目前的 counter 值顯示出來
    echo "counter=" . $_SESSION["counter"];

    // 這是一個連結，按下去會跳到 reset 的網頁，把 counter 清掉重來
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
