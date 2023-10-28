<?php 
require 'baralho.php';
require 'jogador.php';

class Tabuleiro {
public $b1;
public $j1;
public $j2;
public $cartasJ1;
public $cartasJ2;

public function __construct($nome, $nome2) {
    $this->b1 = new Baralho;
    $this->j1 = new Jogador($nome);
    $this->j2 = new Jogador($nome2);

    $this->b1->criarBaralho();

    $this->cartasJ1 = $this->b1->sortearCartas();
    $this->j1->cartas = $this->cartasJ1;

    $this->b1->apagarVetor();       //tivemos que apagar o vetor, por algum motivo estava dando erro

    $this->cartasJ2 = $this->b1->sortearCartas();
    $this->j2->cartas = $this->cartasJ2;
    sort($this->j2->cartas);

}
}
?>