<?php

namespace Alfa;

class Usuario {

    private $login;
    private $senha;

    public function getLogin() {
        return $this->login;
    }

    public function setLogin( $login ) {
        $this->login = $login;        
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha() {
        $this->senha = $senha;
    }

    public function salvar($bd) {
        $sql    = "INSERT INTO USUARIO (LOGIN, SENHA) VALUES (:LOGIN, :SENHA)";
        $stmt   = $bd->prepare($sql);
        $result = $stmt->execute(
            array(
                ':LOGIN' => $this->login,
                ':SENHA' => $this->senha
            ));

        return $result;
    }

    use Traits\Hidratacao;
    
}