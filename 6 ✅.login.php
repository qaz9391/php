<?php
   // 建立與資料庫的連線
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   //這句是從user這張表中查詢所有帳號資料
   $result = mysqli_query($conn, "select * from user");

   //設一個變數來判斷有沒有登入成功
   $login = FALSE;

   //用 while逐筆檢查帳號密碼是否有符合
   while ($row = mysqli_fetch_array($result)) {
     //如果輸入的帳號密碼剛好對到其中一筆，就算成功
     if (($_POST["id"] == $row["id"]) && ($_POST["pwd"] == $row["pwd"])) {
       $login = TRUE;
     }
   }

   //根據上面判斷結果顯示登入結果
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>
