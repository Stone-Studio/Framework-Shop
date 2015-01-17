<?php
//by Sergeev

class cart_shop extends shop {

    function countProducts() {
        $count = count($_SESSION['BUSKET']);

        if(is_numeric($count)){
            return $count;
        } else {
            $error = 'Неизвестная ошибка!';
            return $error;
        }
    }

    function generateCart() {
            $busket = $_SESSION['BUSKET'];

            return $busket;
    }

    function addToCart() {

        $id = $_GET['id'];
        $cost = $_GET['cost'];
        $name = $_GET['name'];

        if ($_REQUEST['id']) {

            $_SESSION['BUSKET'][$id]['id'] = $id;
            $_SESSION['BUSKET'][$id]['cost'] = $cost;
            $_SESSION['BUSKET'][$id]['name'] = $name;
            //задаем значения массиву товара

            if ($_SESSION['BUSKET'][$id]) {
                $count = $_SESSION['BUSKET'][$id]['count'];
                $count++;
            } else {
                $count = 1;
            }
        }
        //товар успешно добавлен
    }

    function clearCart() {

        $clear = $_GET['clear'];

        if($clear = 'yes'){
            $_SESSION['BUSKET'] = array();
        } else {
            exit();
        }
    }

}