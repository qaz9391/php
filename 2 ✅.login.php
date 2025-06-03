<?php 
    // 把剛剛表單輸入的帳號印出來（就是 name="id" 的那一欄）
    echo $_POST["id"]; 
    
    // 換行一下，不然帳號跟密碼會黏在一起看不清楚
    echo "<br>";
    
    // 把剛剛表單輸入的密碼印出來（就是 name="pwd" 的那一欄）
    echo $_POST["pwd"]; 
?>
