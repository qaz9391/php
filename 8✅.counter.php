<?php
    session_start();                                           //開啟session後才能使用儲存裡面的資料
    if (!isset($_SESSION["counter"]))                          //這段是檢查代碼裡面有沒有已經有counter（這個是計數器）
    {
        $_SESSION["counter"] = 2;                              //如果沒有的話，代表第一次進入我把它設定為counter為2
    } else 
    {
        $_SESSION["counter"]++;                                //如果有就是進來過，就讓counter+2
    }
    echo "counter = " . $_SESSION["counter"];                  //這邊是顯示目前它的值
    echo "<br><a href='9.reset_counter.php'>重置 counter</a>";  //顯示一個超連結，然後連到畫面中的頁面（用來重置counter）
?>
