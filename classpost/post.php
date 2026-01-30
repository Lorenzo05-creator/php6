<?php

require_once 'categoria.php';

class POST {
    public string $titolo;
    public CATEGORIA $categoria;
    public array $tag;

    public function __construct(string $titolo, CATEGORIA $categoria, array $tag = []) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function mostraArticolo(): void {
        echo "Titolo: {$this->titolo}\n";
        echo "Categoria: {$this->categoria->nome}\n";
        echo "Tag: " . implode(', ', $this->tag) . "\n";
        echo "--------------------------\n";
    }
}
