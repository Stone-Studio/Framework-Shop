<?php

class catalog_shop extends shop {

    function generateProducts($result) {

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

    function generateProductsByCat() {

    }

    function generateProduct($product) {

    }

}