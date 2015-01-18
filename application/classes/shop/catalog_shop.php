<?php

include_once('shop.php');

//by Sergeev
class catalog_shop extends shop {

    private function generateProducts($result) {

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $id = array(
                'id' => $row['id'],
                'title' => $row['name'],
                'cena' => $row['cena'],
                'photo' => $row['photo']
            );
        }

        //todo

    }

    private function generateProductsByCat() {

    }

    private function generateProduct($product) {

    }

    //отменено

}