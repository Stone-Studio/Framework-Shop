<?php

//by Sergeev

include_once('core/model.php');
include_once('core/view.php');
include_once('core/controller.php');
include_once ('core/route.php');

include_once('classes/shop/cart_shop.php');
include_once('classes/shop/catalog_shop.php');
include_once('classes/shop/final_shop.php');
include_once('classes/shop/shop.php');
include_once('classes/captcha.php');
include_once('classes/class.smtp.php');
include_once('classes/file.php');
include_once('classes/mysql.php');
include_once('classes/server.php');
include_once('classes/string.php');

$cart_shop = new cart_shop();
$catalog_shop = new catalog_shop();
$final_shop = new final_shop();
$shop = new shop();
$captcha = new captcha();
$mail = new SMTP();
$file = new file();
$mysql = new mysql();
$server = new server();
$string = new string();

route::start();

//тут методы общие для всего приложения
