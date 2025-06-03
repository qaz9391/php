<?php
   //這一行是在接上資料庫
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");

   //這裡是在跟資料庫說：「幫我查一下 user 這張表，裡面全部的資料都拿出來」
   $result = mysqli_query($conn, "select * from user");

   //這個 while 迴圈就是每讀一筆就存進$row然後印出來
   while ($row = mysqli_fetch_array($result)) {
     //印出帳號跟密碼，中間用空格隔開，然後換行（<br> 是換行用的）
     echo $row["id"] . " " . $row["pwd"] . "<br>";
   }
?>
