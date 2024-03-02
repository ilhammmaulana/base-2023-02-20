<?php

class Config
{
    private static $SERVER = 'localhost';
    private static $USERNAME = 'root';
    private static $DBNAME = 'ilham_relational';
    private static $PASSWORD = '';
    public static function getConnection()
    {


        try {
            $connection = mysqli_connect(self::$SERVER, self::$USERNAME, self::$PASSWORD, self::$DBNAME);
            return $connection;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}