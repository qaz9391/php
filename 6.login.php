<?php
   
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   // 這邊是建立資料庫連線
   
   $result = mysqli_query($conn, "SELECT * FROM user");
   // 查詢使用者全部的資料表的資料
  
   $login = FALSE;
   // 這是用來判斷登入是否成功的變數 預設為 false
   
   // 用迴圈逐筆比對帳號與密碼
   while ($row = mysqli_fetch_array($result)) {
     // 如果使用者輸入的帳號與密碼和某一筆資料相同
     if (($_POST["帳號"] == $row["帳號"]) && ($_POST["密碼"] == $row["密碼"])) {
       $login = TRUE; // 登入成功
     }
   }

   // 判斷是有沒有登入結果然後去輸出訊息
   if ($login == TRUE)
     echo "登入成功!!";
   else
     echo "您的帳號/密碼 **錯誤**";
?>
