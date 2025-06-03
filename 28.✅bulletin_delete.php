<?php
    error_reporting(0);       //關閉錯誤訊息顯示
    session_start();          //啟用session

    //如果還未登入，就會跳提示並跳回到登入畫面
    if (!$_SESSION["id"]) {
        echo "請登入帳號"; 
        echo "<meta http-equiv=REFRESH content='1, url=2.login.html'>"; //1秒後自動跳轉
    }
    else {
        //成功登入後就可以開始處理刪除佈告
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//連接MySQL

        //取得網址中的bid參數，並組成SQL去刪除指令
        $sql = "delete from bulletin where bid='{$_GET["bid"]}'";

        //啊如果刪除失敗就會顯示錯誤提示
        if (!mysqli_query($conn, $sql)) {
            echo "佈告刪除錯誤";
        }
        else {
            // 刪除成功提示
            echo "佈告刪除成功";
        }

        //無論有沒有成功，1秒後就會跳回到佈告欄列表畫面中
        echo "<meta http-equiv=REFRESH content=', url=11.bulletin.php'>";
    }
?>
