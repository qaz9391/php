<?php
    error_reporting(0);
    //關掉錯的地方
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    //連接到SQL的資料庫主機、帳號那些
    $result = mysqli_query($conn, "SELECT * FROM bulletin");
    //查詢bulletin資料表中的所有資料
    
    echo "<table border=2> 
            <tr>
                <td>佈告編號</td>
                <td>佈告類別</td>
                <td>標題</td>
                <td>佈告內容</td>
                <td>發佈時間</td>
            </tr>";// 上面是開始輸出網頁表格

    // 然後使用while迴圈來一筆一筆抓資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row["bid"]}</td>
                <td>{$row["type"]}</td>
                <td>{$row["title"]}</td>
                <td>{$row["content"]}</td>
                <td>{$row["time"]}</td>
              </tr>";
    }

    // 然後結束表格
    echo "</table>";
?>
