<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:47
 */

class Db
{
    private static $instance = NULL;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $link = mysqli_connect("127.0.0.1", "root", "testesenha123", "agenda");

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }else
                self::$instance = $link;
        }
        return self::$instance;
    }
}