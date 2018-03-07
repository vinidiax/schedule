<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/03/2018
 * Time: 09:08
 */

class LoginController
{
    public function index()
    {
        require_once('module/admin/view/login/index.php');
    }

    public function logar()
    {
        echo 'logar';
    }

    public function logout()
    {
        exit('aloi');
    }

    public function error()
    {
        var_dump('error');
    }
}