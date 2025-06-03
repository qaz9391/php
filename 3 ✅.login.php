<?php 
    // 如果使用者輸入的帳號是 "allen" 而且密碼是 "allen12345"
    if (($_POST["id"] == "allen") && ($_POST["pwd"]=="allen12345"))
        // 那就印出「登入成功」～代表帳密正確
        echo "登入成功";
    else
        // 不然就是失敗囉～帳號或密碼打錯
        echo "登入失敗";
?>
