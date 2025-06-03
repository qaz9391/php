<?php
    
    error_reporting(0);//關閉錯誤訊息顯示
    session_start();//啟用session

    //如果尚未登入id，會提示然後跳轉登入畫面
    if (!$_SESSION["id"]) {
        echo "please login first";  //顯示英文的提示
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>";  //1秒後跳回去登入畫面
    }
    else {
        //登入後會顯示新增佈告表單的畫面
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=23.bulletin_add.php>
";
