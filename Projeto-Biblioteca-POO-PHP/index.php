<?php

require_once 'vendor/autoload.php';

use \Gotenks\Biblioteca\Livro;
use \Gotenks\Biblioteca\Estante;

echo '<h1>Sistema de Biblioteca Iniciado!</h1><br>';

$livro1 = new Livro('Alessandro Kobs', 'PHP 8 e POO');
$livro2 = new Livro('Alessandro Kobs', 'Java iniciantes');

$estante = new Estante();

$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);

echo'<pre>';
//var_dump($estante);
print_r($estante);
echo '<hr>';

$estante->removerLivro($livro2);

print_r($estante);

// echo 'Livro: ' . $livro->getTitulo() . '<br>';
// echo 'Autor: ' . $livro->getAutor() . '<br>';
// echo 'Disponível: ' . ($livro->estaDisponivel() ? 'Sim' : 'Não') . '<br>';
?>