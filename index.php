<?php

require '../../autoload.php';

use Alfa\BD;
use Alfa\Produto;
use Alfa\Usuario;

$bd = new BD();
$prd  = new Produto();
$usu  = new Usuario();

$prd->saveValues(array(
    "nome" => "celular",
    "valor" => "9999"
));

$usu->saveValues(array(
    "login" => "robson.cominato@gmail.com",
    "senha" => "000010000"
));

if ($prd->salvar($bd->dbConect())) {
    echo "Produto cadastrado!";
    echo "<br><br>";
} else  {
    echo "Produto não foi cadastrado!";
    echo "<br><br>";
}

if ($usu->salvar($bd->dbConect())) {
    echo "Usuario cadastrado!";     
} else {
    echo "Usuario não foi cadastrado!";
}
