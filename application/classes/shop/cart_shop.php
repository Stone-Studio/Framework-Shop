<?php
//by Sergeev

include_once('shop.php');
//подключение главного класса

class cart_shop extends shop{

    function countProducts() {
        //пересчет кол-ва продуктов в магазине

        $count = count($_SESSION['BUSKET']);

        if(is_numeric($count)){
            return $count;
        } else {
            $error = 'Неизвестная ошибка!';
            return $error;
        }
    }

    function generateCart() {
            //генерация корзины, массив

            $busket = $_SESSION['BUSKET'];

            return $busket;
    }

    function addToCart() {
        //получение параментров, добавление в корзину

        $id = $_GET['id'];
        $cost = $_GET['cost'];
        $name = $_GET['name'];

        if ($_REQUEST['id']) {

            $_SESSION['BUSKET'][$id]['id'] = $id;
            $_SESSION['BUSKET'][$id]['cost'] = $cost;
            $_SESSION['BUSKET'][$id]['name'] = $name;
            //задаем значения массиву товара

            if ($_SESSION['BUSKET'][$id]) {
                //контроль за кол-вом добавленного товара

                $count = $_SESSION['BUSKET'][$id]['count'];
                $count++;
            } else {
                $count = 1;
            }
        }
        //товар успешно добавлен
    }

    function clearCart() {
        //получение идентификатора

        $clear = $_GET['clear'];

        if($clear = 'yes'){
            //очистка массива если передано yes

            $_SESSION['BUSKET'] = array();
        } else {
            exit();
        }
    }

}