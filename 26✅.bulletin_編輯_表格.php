<?php
    error_reporting(0);   //關閉錯誤訊息的顯示
    session_start();      //啟用session

    //如果尚未登入，顯示提示並跳轉至登入頁
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>"; //1秒後跳轉
    }
    else {
        //成功登入後會開始處理佈告的編輯
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");   //連到資料庫

        //根據網址帶入的bid參數查詢佈告資料
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");
        
        $row = mysqli_fetch_array($result);      //將資料查詢結果存到$row

        //根據佈告類型的數值（1, 2, 3）決定哪個radio要加上checked
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1) $checked1 = "checked";
        if ($row['type'] == 2) $checked2 = "checked";
        if ($row['type'] == 3) $checked3 = "checked";

        //顯示網頁表單，預填舊資料供修改
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
";
