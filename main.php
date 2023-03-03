<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style3.css">
    <title>Mê máy cày</title>
</head>
<header></header>
<body>
<div class="wrapper">
    <div class="header">
    </div>
    <div class="menu">
        <ul class="list_menu">
            <li><a href="main.php">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Thanh toán</a></li>
            <li><a href="#">Giỏ hàng</a></li>
            <li><a href="#">Liên hệ</a></li>
        </ul>
    </div>
    <div class="clear"> </div>
    <div id="main">

        <div class="sidebar">
     
        </div>
        <div class="maincontent">
       
        </div>
    </div>
    <div class="clear"> </div>
    <div class="footer">
        <p>footer</p>
    </div>
</div>

        <a href="main.php ? action=buy">Mua hàng</a>
       <a href="main.php ? action=cart">Giỏ hàng</a>
       
      
</body>
<footer>

</footer>
        </head>
    </html>
    <?php
    session_start();
    include("connected.php");
    ?>