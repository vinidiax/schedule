<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/03/2018
 * Time: 09:08
 */

class LoginController
{

    public function __construct(LoginModel $model)
    {

        $this->_model = $model;
    }

    public function index()
    {

        require_once('module/admin/view/login/index.php');
    }

    public function logar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario    = $_POST['usuario'];
            $senha      = $_POST['senha'];

            $this->_model->setSenha(md5($senha));
            $this->_model->setUsuario($usuario);

            $acessou = $this->_model->validarLogin();

            if($acessou) {
                session_start();
                $_SESSION['usuario'] = 'admin';

                header("Location:?module=admin&controller=dashboard&action=index");
            }else
                $menssagemErro = 'Usuário ou senha incorretos';

        }

        require_once('module/admin/view/login/index.php');
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location:/');
    }

    public function error()
    {
        var_dump('error');
    }
}