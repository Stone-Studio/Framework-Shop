<?php
//by Sergeev
class mysql {

    public $password;
    public $user;
    public $base;
    public $host;

    function connect() {

    mysqli_connect($this->host, $this->user, $this->password, $this->base);

    }

    function select($what, $table, $dbc) {

        $query = "SELECT".$what."FROM".$table."";
        $result = mysqli_query($dbc, $query);

        return $result;
    }

    function insert() {
        //TODO
    }
}

$mysql = new mysql();
$mysql->base = 'hi';
$mysql->connect();

$what = '*';
$table = 'table';