<?php


class DatabaseConnection{


    public static function getConnection(): bool | mysqli {

        $conn = new mysqli("localhost","root","", "scholars");
        if($conn->connect_error)
           return false;

           return $conn;
    }
}



?>