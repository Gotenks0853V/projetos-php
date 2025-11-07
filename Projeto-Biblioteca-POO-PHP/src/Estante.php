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

    public function buscarLivroPorTitulo(string $titulo): ?Livro
    {
        foreach($this->livros as $livro) {
            if (\str_contains(strtolower(($livro->getTitulo())), strtolower($titulo))) {
                return $livro;
            }
            // if (strtolower($livro->getTitulo()) === strtolower($titulo)) {
            //     return $livro;
            // }
        }
        return null;
    }

    public function listarLivrosDisponiveis(): array
    {
        // Uma segunda forma de realizar a mesma ação
        // $livrosDisponiveis = [];
        // foreach ($this->livros as $livroAtual) {
        //     if ($livroAtual->estaDisponivel()) {
        //         $livrosDisponiveis[] = $livroAtual;
        //     }
        // }
        // return $livrosDisponiveis;


        return array_filter($this->livros, function($livroAtual) {
            return $livroAtual->estaDisponivel();
        });
    }
}
?>