<?php
    error_reporting(0);
    //關閉錯誤的地方（避免錯的訊息洩漏給別人）
    session_start();
    // 啟動session才能使用$_SESSION

    if (!$_SESSION["id"]) {
    //檢查有沒有登入網頁（看session裡面有沒有id）
        echo "不好意思！請先登入帳號密碼";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    }//上面這行是如果沒有登入就會提示錯誤然後跳回到登入的頁面
    else {
        // 如果有登入就可以歡迎進入，然後顯示功能的選單
        echo "歡迎蒞臨我的網站, " . $_SESSION["id"] . 
             " [<a href=12.logout.php>登出</a>] " .
             "[<a href=18.user.php>管理使用者</a>] " .
             "[<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";

        // 建立和資料庫的連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

        // 查詢bulletin資料表中的全部資料
        $result = mysqli_query($conn, "SELECT * FROM bulletin");

        // 這邊是輸出表格跟標題列
        echo "<table border=2>
                <tr>
                    <td></td>
                    <td>佈告編號</td>
                    <td>佈告類別</td>
                    <td>標題</td>
                    <td>佈告內容</td>
                    <td>發佈時間</td>
                </tr>";

        //下面這邊是一筆一筆列出裡面的資料
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>
                        <a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
                        <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a>
                    </td>
                    <td>{$row["bid"]}</td>
                    <td>{$row["type"]}</td>
                    <td>{$row["title"]}</td>
                    <td>{$row["content"]}</td>
                    <td>{$row["time"]}</td>
                </tr>";
        }

        // 結束表格的地方
        echo "</table>";
    }
?>
