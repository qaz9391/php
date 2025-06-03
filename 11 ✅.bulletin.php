<?php
    error_reporting(0); //這行是關掉錯誤訊息顯示
    session_start(); //啟用 session 功能，才能用 $_SESSION 記住誰登入了

    if (!$_SESSION["id"]) { //如果沒有人登入（session 裡面沒有 id）
        echo "請先登入"; //提示使用者要先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3 秒後自動跳回登入畫面
    }
    else {
        //如果已經登入了，就顯示歡迎語 + 三個操作連結（登出、使用者管理、新增公告）
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        
        //接著連線到資料庫
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        //查詢 bulletin 這個資料表裡所有的公告資料
        $result=mysqli_query($conn, "select * from bulletin");

        //先印出表格的標題欄位（包含修改與刪除的操作列）
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        //用 while 把每一筆公告資料一筆一筆印出來
        while ($row=mysqli_fetch_array($result)) {
            echo "<tr><td>
                  <a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
                  <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
            echo $row["bid"]; //顯示佈告編號
            echo "</td><td>";
            echo $row["type"]; //顯示佈告類別（1、2、3）
            echo "</td><td>"; 
            echo $row["title"]; //顯示標題
            echo "</td><td>";
            echo $row["content"]; //顯示內容
            echo "</td><td>";
            echo $row["time"]; //顯示時間
            echo "</td></tr>";
        }

        echo "</table>"; //結束表格顯示
    }
?>
