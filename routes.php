<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:53
 */

  function call($module,$controller, $action) {

      require_once('module/'.$module.'/controller/' . $controller . 'Controller.php');
	
      switch($controller) {
          case 'agenda':
              $controller = new AgendaController();
              break;
      }

      $controller->{ $action }();
  }


  $controllers = array('agenda' => ['index', 'error']);



  if (array_key_exists($controller, $controllers)) {
      if (in_array($action, $controllers[$controller])) {
          call($module,$controller, $action);
      } else {
          call($module,'agenda', 'error');
      }
  } else {
      call($module,'agenda', 'error');
  }
?>