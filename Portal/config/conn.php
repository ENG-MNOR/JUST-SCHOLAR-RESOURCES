<?php


class DatabaseConnection{


    public static function getConnection(): bool | mysqli {

        $conn = new mysqli("mysql-1cfa0c07-abdulrahmandev10-95ac.e.aivencloud.com", "avnadmin", "AVNS_cizSOvTZDrnfsqP9ZdO", "just_scholars");
        if($conn->connect_error)
           return false;

           return $conn;
    }
}



?>