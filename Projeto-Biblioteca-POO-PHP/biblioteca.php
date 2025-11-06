<?php
    namespace entidadesBiblioteca{
        class Livro {
            public string $titulo, $autor;
            public bool $disponivel;

            function estaDisponivel()
            {

            }

            function marcarComoEmprestado()
            {

            }

            function marcarComoDisponivel()
            {
                
            }
        }

        class Estante {
            public $livros = [];

            function adicionarLivro()
            {

            }

            function removerLivro()
            {

            }

            function buscarLivroPorTitulo()
            {

            }

            function listarLivrosDisponiveis()
            {

            }
        }

        class Usuario {
            public string $nome;
            public $livrosEmprestados = [];
            public $tipo;

            function podePegarEmprestado()
            {

            }

            function adicionarLivroEmprestado()
            {

            }

            function removerLivroEmprestado()
            {

            }

            function listarLivrosEmprestados()
            {

            }
        }

        // class Professor {

        // }

        // class Aluno {

        // }

        class Bibliotecario {
            function emprestarLivro(Usuario $usuario, Livro $livro, Estante $estante)
            {

            }

            function devolverLivro()
            {

            }
        }
    }
?>