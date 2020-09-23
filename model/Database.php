<?php

/**
 * DataBase: class responsible by
 * PDO connection DB.
 * Singleton Pattern
 */
class DataBase
{

    private static $host = HOST;
    private static $database = DB;
    private static $user = USER;
    private static $pass = PASS;
    private static $drive = DRIVE;

    private static $connect;

    /**
     * Connection(): make PDO connection.
     */
    public function Connection()
    {
        if (empty(self::$connect)) {
            $dsn = self::$drive . ':host=' . self::$host . ';dbname=' . self::$database;
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ];

            try {
                self::$connect = new PDO($dsn, self::$user, self::$pass, $options);
            } catch (\PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return self::$connect;
    }

    /**
     * getConnection(): get current connection
     */
    public static function getConnection()
    {
        return self::Connection();
    }
}
