<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    #mysqli_connect() 建立資料庫裡面的連結
    $result=mysqli_query($conn, "select * from user");
    #mysqli_query() 要從資料庫裡面找資料
    $row=mysqli_fetch_array($result);
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    echo $row["id"] . " " . $row["pwd"]."<br>"; 
    #這是把第一行的 id 和 pwd 印出來，中間加個空格，後面的 <br> 是換行的意思
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
    #這是又再抓第二筆資料然後印出來（這次是沒有換行）顯示方式跟第一筆一樣的。
?>
