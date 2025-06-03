<?php
    error_reporting(0);     //關閉錯誤訊息顯示
    session_start();        //啟用session

    //如果沒有進行登入，則會顯示提示並跳到登入畫面
    if (!$_SESSION["id"]) {
        echo "please login first"; 
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>"; //1秒後自動跳轉
    }
    else{
        //成功登入後，開始執行以下動作
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");            //連接到資料庫
        $result = mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");     //從網址列取得bid數值，查詢對應的佈告資料內容
        $row = mysqli_fetch_array($result);                                                   //取出查詢結果的其中一筆資料，存入到$row

        //根據資料中的type欄位值，決定哪個radio要預設為checked
        $checked1 = "";
        $checked2 = "";
        $checked3 = "";
        if ($row['type'] == 1)
            $checked1 = "checked"; // 若 type 為 1，勾選第一個 radio
        if ($row['type'] == 2)
            $checked2 = "checked"; // 若 type 為 2，勾選第二個 radio
        if ($row['type'] == 3)
            $checked3 = "checked"; // 若 type 為 3，勾選第三個 radio

        //輸出網頁表單，並且將原始資料填入對應欄位中進行編輯
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>
