<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:55
 */

class AgendaController
{
    public function index()
    {
        require_once('module/site/view/agenda/index.php');
    }
    
    public function error()
    {
    	var_dump('error');
    }
}