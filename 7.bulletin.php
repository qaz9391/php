<?php
    error_reporting(0);
    // 關閉錯誤報告（正式環境可以這樣做，開發中建議顯示錯誤）
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    // 連接 MySQL 資料庫（主機、帳號、密碼、資料庫名稱）
    $result = mysqli_query($conn, "SELECT * FROM bulletin");
    // 查詢 bulletin 資料表中的所有資料
    
    echo "<table border=2> 
    // 開始輸出 HTML 表格的表頭
            <tr>
                <td>佈告編號</td>
                <td>佈告類別</td>
                <td>標題</td>
                <td>佈告內容</td>
                <td>發佈時間</td>
            </tr>";

    // 使用 while 迴圈一筆一筆取出資料
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$row["bid"]}</td>
                <td>{$row["type"]}</td>
                <td>{$row["title"]}</td>
                <td>{$row["content"]}</td>
                <td>{$row["time"]}</td>
              </tr>";
    }

    // 結束表格
    echo "</table>";
?>
