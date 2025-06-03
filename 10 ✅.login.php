<?php
   #先連線到資料庫
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   #從 user 這個資料表撈出所有帳號密碼資料
   $result=mysqli_query($conn, "select * from user");

   #先假設還沒登入成功（等一下會用來比對）
   $login=FALSE;

   #一筆一筆拿出資料來比對看看有沒有符合使用者輸入的帳號密碼
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE; //如果有符合，標記為登入成功
     }
   } 

   #如果有比對到正確的帳號密碼，就啟用 session（用來記住登入狀態）
   if ($login==TRUE) {
    session_start(); //啟動 session 功能
    $_SESSION["id"]=$_POST["id"]; //把登入的帳號存到 session 裡面
    echo "登入成功"; //跟使用者說登入成功
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //3秒後自動跳轉到佈告欄頁面
   }
   else {
    echo "帳號/密碼 錯誤"; //登入失敗提示
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //3秒後跳回登入頁面
  }
?>
