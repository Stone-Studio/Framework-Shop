<?php

//by Sergeev

include_once('shop.php');

class final_shop extends shop {

    function createItems($mysql)
        //получение в цикле всех товаров из корзины
    {
        foreach ($_SESSION['BUSKET'] as $key => $arResult) {
            $queryItem = "INSERT INTO `is_items_in_zakazs` (`id`, `item_id`, `count`, `zakaz`) VALUES ('', '" . $arResult['id'] . "', '" . $arResult['count'] . "', '" . $FIO . "')";

            mysqli_query($mysql->connect(), $queryItem) or die ('Ошибка');
            //отправка товаров заказа в Базу Данных

            $queryOrder = "INSERT INTO `is_zakazs`(`id`, `tovars_id`, `total`, `user`) VALUES (NULL, '" . $FIO . "', 'Be', '" . $FIO . "');";

            mysqli_query($mysql->connect(), $queryOrder) or die ('Ошибка');
            //отправка заказа в базу данных
        }
    }
}