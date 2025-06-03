<html>
    <head><title>新增使用者</title></head>
    <body>
<?php
     error_reporting(0);           // 關閉錯誤訊息顯示

    session_start();               // 啟用 session，用來判斷使用者有沒有登入

    
    if (!$_SESSION["id"]) {
        echo "請登入帳號";           // 如果沒有登入進去（session也就是裡面沒有id），會顯示提示並跳轉登入畫面
        echo "<meta http-equiv=REFRESH content='１, url=2.login.html'>";          // 這邊我做成１秒後就可以自動跳轉到登入頁面
    }
    else {
                        // 如果已經登入進去，就會顯示新增使用者的表單
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>          <!-- 輸入使用者的帳號 -->
                密碼：<input type=text name=pwd><p></p>      <!-- 輸入使用者的密碼-->
                <input type=submit value=新增>              <!-- 提交表單跟新增使用者 -->
                <input type=reset value=清除>               <!-- 清空輸入裡面的欄位 -->
            </form>
        ";
    }
?>
    </body>
</html>
