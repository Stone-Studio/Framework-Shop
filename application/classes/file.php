<?php
//by Sergeev
class file {

    function fileExists($file) {
        //проверка существует-ли файл

        if(file_exists($file)){
            $exists_file = true;
            return true;
        } else {
            $exists_file = false;
            return false;
        }

    }

    function fileExistsDebug($exists_file){
        //вывод на экран результата проверки существует-ли файл

        if($exists_file == true){
            echo 'Файл существует';
        } else {
            echo 'Файл не существует';
        }

    }

    function methodExists($object, $method){
        //проверка - существует-ли метод?

        if(method_exists($object, $method)){
            $exists_method = true;
            return true;
        } else {
            $exists_method = false;
            return false;
        }

    }

    function methodExistsDebug($exists_method){
        //вывод на экран результата проверки существует-ли метод

        if($exists_method == true){
            echo 'Метод существует';
        } else {
            echo 'Метод не существует';
        }
        
    }

    function getFileInfo($file) {
        //получение данных о файле

        if(is_file($file)) {

            $fileInfo = [
                $name = $_FILES[$file]['name'],
                $size = $_FILES[$file]['size'],
                $tmp = $_FILES[$file]['tmp_name']
            ];

            return $fileInfo;

        } else {
            $error = 'Это не файл!';
            return $error;
        }
    }

    function fileSize($file, $maxSize, $fileInfo){
        //проверяет не превышает-ли файл макс. размер

        if(is_file($file)){

            if($fileInfo[1] > $maxSize){
                $error = 'Файл слишкком большой';

                return $error;
            } else {
                return true;

                //если это файл и он соответствует размерам - вернуть true
            }

        } else {
            $error = 'Это не файл!';

            return false;
        }

    }

    //TODO

}