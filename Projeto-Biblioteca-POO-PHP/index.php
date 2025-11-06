<?php

require_once 'vendor/autoload.php';

use \Gotenks\Biblioteca\Livro;

echo 'Sistema de Biblioteca Iniciado';

$livro = new Livro('Alessandro Kobs', 'PHP 8 e POO');

echo 'Livro: ' . $livro->getTitulo() . '<br>';
echo 'Autor: ' . $livro->getAutor() . '<br>';
echo 'Disponível: ' . ($livro->estaDisponivel() ? 'Sim' : 'Não') . '<br>';
?>