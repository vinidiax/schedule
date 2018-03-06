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
           $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
           self::$instance = new PDO('mysql:host=localhost;dbname=agenda','root','', $pdo_options);
        }
        return self::$instance;
    }
}