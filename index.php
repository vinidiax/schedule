<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:46
 */
require('connection.php');

if (isset($_GET['controller']) && isset($_GET['action']) && isset($_GET['module'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    $module = $_GET['module'];
} else {
	$module = 'site';
    $controller = 'agenda';
    $action = 'index';
}

require_once('module/site/view/layout.php');

?>