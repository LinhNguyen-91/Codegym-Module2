<?php

class KetNoi

{
    public $username;
    public $password;
    public $host;
    public $dbname;
    public $port;

    public function __construct($host = '127.0.0.1', $username = 'root', $password = '', $dbname = 'inotes', $port = '3306')
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->port = $port;
    }
    public function ketNoi(){
        return mysqli_connect($this->host,$this->username,$this->password,$this->dbname,$this->port);

    }
}