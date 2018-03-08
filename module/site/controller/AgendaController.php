<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 06/03/2018
 * Time: 13:55
 */

class AgendaController
{
    private $_model;

    public function __construct(AgendaModel $model)
    {
        $this->_model = $model;
    }

    public function buscarContatos()
    {
        return $this->_model->all();
    }

    public function adicionarContato($nome, $email, $telefone, $celular)
    {

        $postData = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'celular' => $celular

        ];

        $dadosVerificados = $this->_verificarDadosParaInserir($postData);

        if (is_bool($dadosVerificados)) {
            $this->_model->setNome($postData['nome']);
            $this->_model->setEmail($postData['email']);
            $this->_model->setTelefone(preg_replace('/[^0-9]/', '', $postData['telefone']));
            $this->_model->setCelular(preg_replace('/[^0-9]/', '', $postData['celular']));
            $saved = $this->_model->save();

            return $saved;

        }

        return $dadosVerificados;

    }

    public function editarContato($id, $nome, $email, $telefone, $celular)
    {

        $postData = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'celular' => $celular
        ];

        $dadosVerificados = $this->_verificarDadosParaInserir($postData);

        if (is_bool($dadosVerificados)) {

            $this->_model->setId($id);
            $this->_model->setNome($postData['nome']);
            $this->_model->setEmail($postData['email']);
            $this->_model->setTelefone(preg_replace('/[^0-9]/', '', $postData['telefone']));
            $this->_model->setCelular(preg_replace('/[^0-9]/', '', $postData['celular']));
            $saved = $this->_model->update();

            return $saved;

        } else {
            return $dadosVerificados;
        }
    }

    public function deletarContato($id)
    {

        $this->_model->setId((int)$id);

        return $this->_model->delete();
    }

    public function index($mensagemSucesso = null, $menssagemErro = null)
    {

        $menssagemSucesso   = $mensagemSucesso;
        $menssagemErro      = $menssagemErro;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $postData = $_POST;

            $contatos = $this->_model->search($postData);

        } else {
            $contatos = $this->buscarContatos();
        }



        require_once('module/site/view/agenda/index.php');
    }

    public function novo()
    {
        $dadosVerificados = false;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $postData = $_POST;

            $saved = $this->adicionarContato($postData['nome'],$postData['email'],$postData['telefone'], $postData['celular']);

            if( !is_bool($saved)) {
                $dadosVerificados = $saved;
            } elseif ($saved) {

                $menssagemSucesso = 'Contato adicionado com sucesso';

                unset($postData);

            } else {
                $dadosVerificados = 'Erro ao salvar os dados do contato';
            }

        }

        require_once('module/site/view/agenda/novo.php');
    }

    public function editar()
    {
        $dadosVerificados = false;

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $postData = $_POST;

                $saved = $this->editarContato( $id, $postData['nome'],$postData['email'],$postData['telefone'], $postData['celular']);

                if(!is_bool($saved)) {
                    $dadosVerificados = $saved;
                } elseif ($saved) {
                    $menssagemSucesso = 'Contato atualizado com sucesso';
                }else {
                    $dadosVerificados = 'Erro ao salvar os dados do contato';
                }


            } else {

                $postData = $this->_model->find($id);

                if (!is_array($postData)) {
                    exit('Id inexistente');
                }
            }

            require_once('module/site/view/agenda/editar.php');

        }else {
            exit('Nenhum id foi informado');
        }

    }

    public function delete()
    {
        if (isset($_GET['id'])) {

            $id = (int)$_GET['id'];

            $postData = $this->_model->find($id);

            if($postData) {



            $deleted = $this->deletarContato($id);

            if ($deleted) {

                $menssagemSucesso = 'Contato excluído com sucesso';

                $this->index($menssagemSucesso, null);

            } else {

                $menssagemErro = 'Contato excluído com sucesso';

                $this->index(null, $menssagemErro);
            }

            } else {

                $menssagemErro = 'Contato não encontrado';

                $this->index(null, $menssagemErro);
            }



        }
    }

    public function error()
    {
    	exit('page dont found');
    }

    private function _verificarDadosParaInserir($dados)
    {
        if ($dados['nome'] == '') {
            return 'Campo NOME não pode ficar em branco';
        } elseif ($dados['telefone'] == '' && $dados['celular'] == ''){
            return 'Preencha o campo telefone ou celular';
        } else {
            return true;
        }

    }
}