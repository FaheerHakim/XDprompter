<?php 

abstract class Db 
{
    private static $conn;

    public static function getConnection() 
    {
        if(self::$conn !== null) {
            return self::$conn;
        } else {
            // no connection found 
            self::$conn = new PDO("mysql:host=localhost;dbname=XDprompter", "root", "123456");
            return self::$conn;
        }
    }
}