<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 07/03/2018
 * Time: 09:08
 */

class DashboardController
{

    private $mesDescricao = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
    ];

    private $generoDescricao = [
            1 => 'Masculino',
            2 => 'Feminino'
    ];

    public function __construct(DashboardModel $model)
    {
        session_start();

        if(!isset($_SESSION['usuario'])){
            header('Location:/');
        }

        $this->_model = $model;
    }

    public function index()
    {

        $graficoGenero = $this->_model->graficoPorGenero(2017);


        $dadosGraficoGenero = [];
        $cont = 0;
        while($grafico = $graficoGenero->fetch_array()) {

            $mes    = $grafico['mes'];
            $genero = $grafico['genero'];
            $dadosGraficoGenero[$mes][$genero]['total'] = $grafico['total'];
            //echo $this->mesDescricao[$mes].' - '.$this->generoDescricao[$genero].' - '.$grafico['total'].'<br/>';

            $cont++;
        }

        require_once('module/admin/view/dashboard/index.php');
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