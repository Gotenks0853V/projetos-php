<?php

namespace Gotenks\Biblioteca;

class Bibliotecario 
{

    public function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        // O livro tem que estar na estante
        // O livro tem que estar disponível
        // O usuário tem que poder pegar emprestado
        echo '<hr>';

        if (!$livro->estaDisponivel()) {
            echo '<br>O livro não está disponível<br>';
            return false;
        }

        if (!$usuario->podePegarEmprestado()) {
            echo '<br>O usuário não pode pegar livros emprestados.<br>';
            return false;
        }

        if (!$estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>O livro não está na estante<br>';
            return false;
        }

        $livro->marcarComoEmprestado();
        $usuario->adicionarLivroEmprestado($livro);
        $estante->removerLivro($livro);
        echo '<br>Livro emprestado com sucesso!<br> <hr>';

        return true;
    }

    public function devolverLivro(Usuario $usuario, Livro $livro, Estante $estante): bool
    {
        // O livro tem que estar com o usuário
        // O livro tem que ser colocado na estante
        // O livro tem que passar a estar disponível
        echo '<hr>';

        if ($livro->estaDisponivel()) {
            echo '<br>O livro não está emprestado.<br>';
            return false;
        }

        if ($estante->buscarLivroPorTitulo($livro->getTitulo())) {
            echo '<br>O livro já está na estante.<br>';
            return false;
        }

        
        $usuario->removerLivroEmprestado($livro);
        $estante->adicionarLivro($livro);
        $livro->marcarComoDisponivel();
        echo '<br>Livro Devolvido Com Sucesso!<br>';
        return true;
    }
}

?>