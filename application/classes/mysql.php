<?php
//by Sergeev
class mysql {

    public $password;
    public $user;
    public $base;
    public $host;

    function connect() {

        mysqli_connect('mysql.hostinger.ru', 'u154891117_dev', 'cfkfn2002', 'u154891117_dev') || die ('Ошибка');
        //подключение к базе данных

        //TODO: Вывод данных для подключения в переменные

    }

    function select($what, $table, $dbc) {

        $query = "SELECT".$what."FROM".$table."";
        $result = mysqli_query($dbc, $query);

        return $result;

        //TODO
    }

    function insert() {
        //TODO
    }
}