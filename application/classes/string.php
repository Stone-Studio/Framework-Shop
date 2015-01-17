<?php
//by Sergeev
class string {

    function explodeRequest($string) {

        if(!empty($string)) {
            $explodeString = explode(' ', $string);
            return $explodeString;
        } else {
            echo 'Строка пуста :)';
            return false;
        }
    }

    function replacePointOnSpace($string)
    {

        if (!empty($string)) {
            $replaceString = str_repeat(',', ' ');
            return $replaceString;
        }
        else {
            echo 'Строка пуста';
            return false;
        }
    }

    function cutString($string, $start, $cut) {

        if(!empty($string)){

            if($start < 0){
                $start = 0;

                echo 'Данная переменная не может
                 принять отрицательное значение.';

                return false;
            } else {
                if($cut < 0){

                    echo 'Данная переменная не может
                 принять отрицательное значение.';

                    return false;
                } else {
                    $shortString = substr($string, $start, $cut);

                    return $shortString;
                }}}
    }

    function rusToEng($string){

        //TODO: Массив с англ., массив с русскими, foreach str_replace

    }
}