<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:53
 */

  function call($controller, $action) {

      require_once('controller/' . $controller . '_controller.php');


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
          call($controller, $action);
      } else {
          call('agenda', 'error');
      }
  } else {
      call('agenda', 'error');
  }
?>