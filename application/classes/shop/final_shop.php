<?php

//by Sergeev

class final_shop extends shop {

    function createItems()
    {
        foreach ($_SESSION['BUSKET'] as $key => $arResult) {
            $queryItem = "INSERT INTO `is_items_in_zakazs` (`id`, `item_id`, `count`, `zakaz`)
              VALUES ('', '" . $arResult['id'] . "', '" . $arResult['count'] . "', '" . $FIO . "')";

            mysqli_query($this->dbc, $queryItem) or die ('Ошибка' . mysqli_error($this->dbc));
        }
    }

    function createOrder(){
        $queryOrder = "INSERT INTO `is_zakazs`
        (`id`, `tovars_id`, `total`, `user`) VALUES (NULL, '" . $FIO . "', 'Be', '" . $FIO . "');";

        mysqli_query($this->dbc, $queryOrder) or die ('Ошибка:' . mysqli_error($this->dbc));

    }
}