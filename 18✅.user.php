<html>
    <head><title>使用者管理</title></head>
    <body>
<?php
    
    error_reporting(0);      //關閉錯誤訊息顯示
    session_start();         //啟用session功能

    //檢查session裡面有沒有id
    if (!$_SESSION["id"]) {
        echo "請登入帳號";      //如果還沒登入就會顯示提示並跳回登入畫面
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>"; //1秒後跳轉
    }
    else {   
        
        echo "<h1>使用者管理</h1>。            //如果已經登入就可以顯示使用者的管理畫面
            [<a href=14.user_add_form.php>新增使用者</a>] 
            [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
            <table border=1>
                <tr><td></td><td>帳號</td><td>密碼</td></tr>";

        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    //連接資料庫裡面各種名稱
        $result = mysqli_query($conn, "select * from user");     //執行SQL撈出使用者表格的所有資料 

        //用迴圈去讀出每一筆資料，顯示在表格裡面
        while ($row = mysqli_fetch_array($result)) {
            
            
                     //顯示每筆使用者資料修改和刪除的連結
            echo "<tr>
                    <td>
                        <a href=19.user_edit_form.php?id={$row['id']}>修改</a>||
                        <a href=17.user_delete.php?id={$row['id']}>刪除</a>
                    </td>
                    <td>{$row['id']}</td>
                    <td>{$row['pwd']}</td>
                  </tr>";
        }

       
        echo "</table>";
    }
?> 
    </body>
</html>
