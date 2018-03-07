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
              require_once('module/site/model/AgendaModel.php');
              break;
          case 'login':
              $controller = new LoginController();
              require_once('module/admin/model/LoginModel.php');
              break;
      }

      $controller->{ $action }();
  }


    $controllers = array(
        'agenda' => ['index','novo', 'error'],
        'login'  => ['index' ,'error', 'logar', 'logout']
    );



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