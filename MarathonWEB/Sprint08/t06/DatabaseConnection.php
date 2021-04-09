<?php


class DatabaseConnection
{
    public  $connection;

    public function __construct($host, $port, $username, $password, $database)
    {
        mysqli_connect($host,$username,$password,$database,$port);
    }

    public function getConnectionStatus(){
       return ($this->connection)?true:false;
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}