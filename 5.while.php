<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");    #mysqli_connect()這段是建立資料庫連結
   $result=mysqli_query($conn, "select * from user");                          #mysqli_query()這函數是在資料庫裡面查詢資料
   while ($row=mysqli_fetch_array($result)) {                                  #mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
?>
