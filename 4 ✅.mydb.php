<?php
    //這是連到資料庫的動作
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    //這行是在資料庫裡查「user」這張表的所有資料
    $result = mysqli_query($conn, "select * from user");
    //這行是從剛剛查到的資料中拿第一筆出來
    $row = mysqli_fetch_array($result);

    // 印出第一筆的帳號跟密碼
    echo $row["id"] . " " . $row["pwd"] . "<br>";

    // 再拿下一筆出來
    $row = mysqli_fetch_array($result);

    // 印出第二筆的帳號跟密碼
    echo $row["id"] . " " . $row["pwd"];
?>
