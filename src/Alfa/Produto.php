<?php

namespace Alfa;

class Produto {

    private $descricao;
    private $valor;

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao( $descricao ) {
        $this->descricao = $descricao;        
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor() {
        $this->valor = $valor;
    }

    public function salvar($bd) {
        $sql    = "INSERT INTO PRODUTO (DESCRICAO, VALOR) VALUES (:DESCRICAO, :VALOR)";
        $stmt   = $bd->prepare($sql);
        $result = $stmt->execute(
            array(
                ':DESCRICAO'  => $this->descricao,
                ':VALOR' => $this->valor
            ));

        return $result;
    }

    use Traits\Hidratacao;
}