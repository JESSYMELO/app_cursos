<?php
/**
 * Created by PhpStorm.*/

include 'vendor\autoload.php';

$c1 = new App\Model\Curso();
$c1->setNome("MySQL 5");
$c1->setValor(200.00);

echo $c1->getNome() . $c1->getValor();

$c1DAO = new App\DAO\CursoDAO();
$c1DAO->inserir($c1);