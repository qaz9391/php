<?php
error_reporting(0);          //關閉錯誤訊息顯示（避免顯示錯誤給使用者看到）

session_start();             //啟用 session 功能，讓 PHP 能取得登入使用者資訊

                             //判斷是否登入，如果沒有登入的話，提示並 1 秒後就會自動跳轉登入畫面
if (!$_SESSION["id"]) {
    echo "請登入帳號";  
    echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>";  //1秒後跳轉登入畫面
}
else {
    //✅已登入進去後，進行資料庫操作
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //然後建立連線：連到db4free.net的immust資料庫
    
    $sql = "insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";  //準備新增使用者SQL語句，從表單接收id和pwd值

    //執行SQL新增的指令，失敗的話就會顯示錯誤
    if (!mysqli_query($conn, $sql)) {
        echo "新增命令錯誤";
    } else {
        echo "新增使用者成功，三秒鐘後回到網頁";  //成功時顯示提示訊息，1 秒後跳轉回使用者頁面
        echo "<meta http-equiv=REFRESH content='1, url=18.user.php'>";
    }
}
?>
