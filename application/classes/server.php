<?php
//by Sergeev
class server {

    function getIp() {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

        if(empty($ip)){
            $error = 'IP пустой :D';
        } else {
            $error = '';
        }
    }

}