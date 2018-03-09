<?php

class DashboardModel
{
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    private $usuario;
    private $senha;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    public function validarLogin()
    {

        $sql = $this->_db->query("
                SELECT 
                  usuario_id, 
                  usuario_login 
                FROM usuario 
                WHERE 
                  usuario_login = '{$this->usuario}'
                AND 
                  usuario_senha = '{$this->senha}' 
                
                ");

        if($sql) {
            return $sql->fetch_array();
        }else
            return false;
    }

    public function graficoPorGenero($year = null)
    {
        if (!$year) {
           $year = date('Y');
        }

        $sql = $this->_db->query("            
            SELECT 
                count(contato_genero) as total, 
                contato_genero as genero,
                month(contato_registro) as mes,
                year(contato_registro) as ano
            FROM 
              contato
            WHERE
              year(contato_registro) = {$year}   
            GROUP BY 
              contato_genero, 
              month(contato_registro), 
              year(contato_registro)   
            ORDER BY 
              year(contato_registro), 
              month(contato_registro)       
        ");

        return $sql;
    }
}
?>