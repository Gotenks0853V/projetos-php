<?php

require_once 'vendor/autoload.php';

use \Gotenks\Biblioteca\Livro;
use \Gotenks\Biblioteca\Estante;
use \Gotenks\Biblioteca\Aluno;

//echo '<h1>Sistema de Biblioteca Iniciado!</h1><br>';

$livro1 = new Livro('Alessandro Kobs', 'PHP 8 e POO para iniciantes');
$livro2 = new Livro('Alessandro Kobs', 'Java para iniciantes');
$livro3 = new Livro('Alessandro Kobs', 'Python para iniciantes');

$livro1->marcarComoDisponivel();

$estante = new Estante();

$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

$livroEncontrado = $estante->buscarLivroPorTitulo('iniciantes');
//print_r($livroEncontrado);

$aluno = new Aluno('Kobs');
$aluno->adicionarLivroEmprestado($livro1);
//$professor->adicionarLivroEmprestado($livro2);
//$professor->adicionarLivroEmprestado($livro3);

echo '<pre>';
var_dump($aluno->listarLivrosEmprestados());
echo '</pre>';

//echo'<pre>';
//var_dump($estante);
// print_r($estante);
// echo '<hr>';
// $estante->removerLivro($livro2);
// print_r($estante);

// echo 'Livro: ' . $livro->getTitulo() . '<br>';
// echo 'Autor: ' . $livro->getAutor() . '<br>';
// echo 'Disponível: ' . ($livro->estaDisponivel() ? 'Sim' : 'Não') . '<br>';
?>