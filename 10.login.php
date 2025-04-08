<?php
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 使用 mysqli_connect() 建立和資料庫的連線然後參數順序是：主機位址、使用者名稱、密碼，然後則是資料庫名稱
  
   $result = mysqli_query($conn, "SELECT * FROM user");
    // 這裡我們用執行 SQL 查詢整個使用者的資料表
   
   $login = FALSE;
   // 然後這是用來判斷是否登入成功的函數，預設為 FALSE

   while ($row = mysqli_fetch_array($result)) {
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
        // 這三行是一筆一筆抓出查詢結果中的資料去比對輸入的帳號跟密碼有沒有和資料庫某一筆一樣
     }
   }

   // 如果比對成功，登入成功
   if ($login == TRUE) {
     // 啟用 session 機制
     session_start();
     
     $_SESSION["id"] = $_POST["id"];
     // 將你輸入帳號存入到session作為登入狀態的識別
     
     echo "登入成功!";
     // 這裡就會顯示成功進去的訊息
     
      echo "<meta http-equiv=REFRESH content='2; url=11.bulletin.php'>";
   }
      // 這是 2 秒後就會自動進入到 11.bulletin.php 那邊的頁面

   // 登入失敗就會顯示錯誤訊息
   else {
     echo "您的帳號/密碼 **輸入錯誤**";

     // 2 秒後轉跳回一開始登入畫面
     echo "<meta http-equiv=REFRESH content='2; url=2.login.html'>";
   }
?>
