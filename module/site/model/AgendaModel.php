<?php

class AgendaModel
{
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly

    const GENERO_DESCRICAO = [
        1 => 'Masculino',
        2 => 'Feminino'
    ];

    private $id;
    private $nome;
    private $genero;
    private $telefone;
    private $celular;
    private $email;
    private $_db;


    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function getGenero()
    {
        return mysqli_escape_string($this->_db, $this->genero);
    }

    public function setGenero($genero)
    {
        $this->genero = mysqli_escape_string($this->_db, $genero);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return (int)mysqli_escape_string($this->_db, $this->id);
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = mysqli_escape_string($this->_db, $id);
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return mysqli_escape_string($this->_db, $this->nome);
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = mysqli_escape_string($this->_db, $nome);
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return mysqli_escape_string($this->_db, $this->telefone);
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = mysqli_escape_string($this->_db, $telefone);
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return mysqli_escape_string($this->_db, $this->celular);
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = mysqli_escape_string($this->_db, $celular);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return mysqli_escape_string($this->_db, $this->email);
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = mysqli_escape_string($this->_db, $email);
    }

    public function all() {

        $sql = $this->_db->query("SELECT contato_id, contato_nome, contato_telefone, contato_celular, contato_email, contato_genero FROM contato  ORDER BY contato_nome ASC");
        if ($sql) {
            return $sql;
        }

        return false;

    }
    public function find($id) {

        $id = (int)mysqli_escape_string($this->_db,$id);

        $sql = $this->_db->query("
                SELECT 
                  contato_id, 
                  contato_nome as nome, 
                  contato_telefone as telefone, 
                  contato_celular as celular, 
                  contato_email as email,
                  contato_genero as genero 
                FROM contato 
                WHERE contato_id = {$id}
                ORDER BY contato_nome ASC
        ");

        if($sql) {
            return $sql->fetch_array();
        }else
            return false;


    }

    public function save()
    {

        $dataRegistro = date('Y-m-d H:i:s');

        $sql    = $this->_db->query(
                "INSERT INTO contato 
                 (contato_nome, contato_telefone, contato_celular, contato_email, contato_genero, contato_registro)
                 VALUES
                      (
                       '{$this->getNome()}',
                       '{$this->getTelefone()}',
                       '{$this->getCelular()}',
                       '{$this->getEmail()}',
                       {$this->getGenero()},
                       '{$dataRegistro}'   
                      )"
        );

        return $sql;
    }

    public function update()
    {

        $sql    = $this->_db->query("
                    UPDATE contato SET  
                        contato_nome      = '{$this->getNome()}',
                        contato_telefone  = '{$this->getTelefone()}',
                        contato_celular   = '{$this->getCelular()}',
                        contato_email     = '{$this->getEmail()}',
                        contato_genero    = {$this->getGenero()}      
                    WHERE
                      contato_id = {$this->getId()}"
        );


        return $sql;
    }

    public function delete()
    {
        $sql = $this->_db->query("DELETE FROM contato WHERE contato_id = {$this->getId()}");

        return $sql;
    }

    public function search($postData)
    {
        $sql    =   "SELECT contato_id, contato_nome, contato_telefone, contato_celular, contato_email, contato_genero FROM contato ";

        $where = 'WHERE 1=1 ';

        if($postData['nome'] != '') {
            $where .= " AND contato_nome LIKE '%".mysqli_escape_string($this->_db,$postData['nome'])."%'";
        }

        if($postData['email'] != '') {
            $where .= " AND contato_email LIKE '%".mysqli_escape_string($this->_db,$postData['email'])."%'";
        }

        if($postData['telefone'] != '') {
            $telefone = preg_replace('/[^0-9]/', '',mysqli_escape_string($this->_db,$postData['telefone']));
            $where .= " AND contato_telefone LIKE '%{$telefone}%'";
        }

        if($postData['celular'] != '') {
            $celular = preg_replace('/[^0-9]/', '',mysqli_escape_string($this->_db,$postData['celular']));
            $where .= " AND contato_celular LIKE '%{$celular}%'";
        }

        $sql .= $where;

        return $this->_db->query($sql);


    }
}
?>