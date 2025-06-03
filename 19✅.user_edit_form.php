<html>
    <head><title>修改使用者</title></head>
    <body>
<?php
    
    error_reporting(0);//關閉錯誤訊息顯示
    session_start();  //啟用session

    //如果使用者還沒登入就會自動跳回登入畫面
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>";  //1秒後跳轉
    }
    else {
        //登入後開始顯示修改使用者表單
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");       //連接資料庫（db4free.net）
        $result = mysqli_query($conn, "select * from user where id='{$_GET['id']}'");   //從GET參數取得id，查詢使用者的資料

        //將查詢結果存到$row
        $row = mysqli_fetch_array($result);

        //顯示修改表單：
        //顯示帳號不能修改
        //密碼輸入欄位預填舊密碼
        //隱藏欄位傳送id給下一頁使用
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br>
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
?>
    </body>
</html>
