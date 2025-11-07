<?php 

namespace Gotenks\Biblioteca;

class Estante {
    // Array privado de Livros
    private array $livros = [];

    public function adicionarLivro(Livro $livro): void {
        $this->livros[] = $livro;
    }

    public function removerLivro(Livro $livro): void
    {
        $this->livros = array_filter(
            $this->livros,
            function ($livroAtual) use ($livro) {
                echo 'Livro Atual: ' . $livroAtual->getTitulo();
                if ($livroAtual === $livro) {
                    echo '- Livro removido!';
                }
                echo '<br>';
                return $livroAtual !== $livro;
            }
            // função anônima, segunda possibilidade
            // fn($livroAtual) => $livroAtual !== $livro
        );
    }

    function buscarLivroPorTitulo()
    {

    }

    function listarLivrosDisponiveis()
    {

    }
}
?>