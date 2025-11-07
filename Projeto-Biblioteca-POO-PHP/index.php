<?php

require_once 'vendor/autoload.php';

use \Gotenks\Biblioteca\Livro;

echo '<h1>Sistema de Biblioteca Iniciado!</h1><br>';

$livro = new Livro('Alessandro Kobs', 'PHP 8 e POO');

echo 'Livro: ' . $livro->getTitulo() . '<br>';
echo 'Autor: ' . $livro->getAutor() . '<br>';
echo 'Disponível: ' . ($livro->estaDisponivel() ? 'Sim' : 'Não') . '<br>';
?>