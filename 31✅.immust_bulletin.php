<!DOCTYPE html>
<html>
<head>
    <title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">

    <!-- 這裡是引入輪播圖（Flexslider）要用的樣式跟 JS 套件 -->
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
    <script>
        // 輪播圖啟動用的 JS 設定
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                rtl: true
            });
        });
    </script>

    <!-- 這整包是網頁的 CSS，控制每個區塊的外觀、顏色、排列方式等等 -->
    <style>
        *{ margin:0; color:gray; text-align:center; }

        /* 頁面最上面那塊：Logo 和右上角連結 */
        .top{ background-color: white; }
        .top .container{ display: flex; align-items: center; justify-content: space-between; padding:10px; }
        .top .logo{ font-size: 35px; font-weight: bold; }
        .top .logo img{ width: 100px; vertical-align: middle; }
        .top .top-nav{ font-size: 25px; font-weight: bold; }
        .top .top-nav a{ text-decoration: none; }

        /* 上方的主選單區（黑色背景那條） */
        .nav{ background-color:#333; display: flex; justify-content: center; }
        .nav ul{ list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #333; }
        .nav li{ float: left; }
        .nav li a{ display: block; color: white; padding: 14px 16px; text-decoration: none; }
        .nav li a:hover{ background-color: #111; }

        /* 主選單裡的下拉選單（滑過成員簡介時會展開） */
        .dropdown:hover .dropdown-content { display: block; }
        li.dropdown:hover{ background-color: #333; }
        .dropdown-content{ display: none; position: absolute; background-color: #333; min-width: 160px; z-index: 1; }
        .dropdown-content a{ color: black; padding: 12px 16px; text-decoration: none; display: block; text-align: left; }

        /* 輪播區塊（黑底切換圖片的部分） */
        .slider{ background-color: black; }

        /* 系所簡介那塊藍藍漸層背景的區域 */
        .banner{ background-image: linear-gradient(#ABDCFF,#0396FF); padding:30px; }
        .banner h1{ padding: 20px; }

        /* 師資介紹區塊（老師照片那塊） */
        .faculty { display: block; justify-content: center; background-color:white; padding:40px; }
        .faculty h2 { font-size: 25px; color: rgb(50,51,52); padding-bottom:40px; }
        .faculty .container { display: flex; justify-content: space-around; align-items: center; }
        .faculty .teacher{ display:block; text-decoration: none; }
        .faculty .teacher img{ height: 200px; width: 200px; }
        .faculty .teacher h3{ color: White; background-color: rgba(39,40,34,.500); text-align: center; }

        /* 聯絡資訊區塊（地址、電話、地圖） */
        .contact { display: block; justify-content: center; margin-top: 30px; margin-bottom: 30px; }
        .contact h2{ color: rgb(54, 82, 110); font-size: 25px; }
        .contact .infos{ display:flex; margin-top: 30px; justify-content: center; }
        .contact .infos .left{ display:block; text-align: left; margin-right: 30px; }
        .contact .infos .left b{ display:block; margin-top: 10px; color: Gray; font-size: 18px; }
        .contact .infos .left span{ display:block; margin-top: 10px; color: rgba(39,40,34,0.5); font-size: 16px; padding-left: 27px; }
        .contact .infos .right{ height: 200px; }
        .contact .infos .right iframe{ width: 100%; height: 100%; border: 1px solid rgba(39,40,34,0.50); }

        /* 最下面的頁尾（版權資訊） */
        .footer{ display: flex; justify-content: center; background-color: rgb(25,26,30); padding: 30px 0; }

        /* 登入彈跳視窗的樣式（點登入才會出現） */
        .modal {
            display: none; position: fixed; z-index: 1;
            right: 50; top: 50; width: 20%; height: 20%;
            overflow: auto; background-color: rgba(255,255,255,0.9); padding-top: 50px;
        }

        /* 佈告欄區塊（顯示從資料庫撈出來的公告） */
        .bulletin{
            display: block;
            justify-content: center;
            background-color: rgb(255,204,153);
            padding: 30px 0;
        }
        .bulletin h1{ padding:10px; }
        .bulletin table{
            border-collapse:collapse;
            font-family: 微軟正黑體;
            font-size:16px; 
            border:1px solid #000;
        }
        .bulletin table th{ background-color: #abdcff; color: #ffffff; }
        .bulletin table td{ background-color: #ffffff; color: #0396ff; }
    </style>
</head>
<body>
