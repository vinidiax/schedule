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

    public function novo()
    {
        require_once('module/site/view/agenda/novo.php');
    }

    public function error()
    {
    	exit('page dont found');
    }
}