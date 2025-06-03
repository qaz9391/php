<?php
    error_reporting(0);  // 關掉錯誤提示，避免使用者看到系統錯誤訊息

    // 跟遠端的資料庫建立連線
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

    // 查詢 bulletin 這張表裡的所有資料（就是佈告欄內容）
    $result = mysqli_query($conn, "select * from bulletin");

    // 開始輸出表格的表頭
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";

    // 用 while 迴圈把每一筆資料一行一行印出來
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr><td>";
        echo $row["bid"];        // 顯示編號
        echo "</td><td>";
        echo $row["type"];       // 顯示類型（1~3 之類的代碼）
        echo "</td><td>"; 
        echo $row["title"];      // 顯示標題
        echo "</td><td>";
        echo $row["content"];    // 顯示內容
        echo "</td><td>";
        echo $row["time"];       // 顯示時間
        echo "</td></tr>";
    }

    // 表格結束
    echo "</table>";
?>
