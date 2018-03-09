<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:53
 */

  function call($module,$controller, $action) {

      require_once('module/'.$module.'/controller/' . $controller . 'Controller.php');
	
      switch ($controller) {

          case 'agenda':

              require_once('module/site/model/AgendaModel.php');

              $model = new AgendaModel(Db::getInstance());
              $controller = new AgendaController($model);

              break;
          case 'login':

              require_once('module/admin/model/LoginModel.php');

              $model = new LoginModel(Db::getInstance());
              $controller = new LoginController($model);

              break;

          case 'dashboard':
              require_once('module/admin/model/DashboardModel.php');

              $model = new DashboardModel(Db::getInstance());
              $controller = new DashboardController($model);
      }

      $controller->{ $action }();
  }


    $controllers = array(
        'agenda' => ['index','novo', 'editar', 'delete', 'error'],
        'login'  => ['index' ,'error', 'logar', 'logout'],
        'dashboard' => ['index','error', 'graficoGenero']
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
