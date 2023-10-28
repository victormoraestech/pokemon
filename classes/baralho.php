<?php 
include 'cartaPokemon.php';

class Baralho {

    public $deck = [];
    public $p1;
    public $cartas = [];
    public $qtdcartas = 6;

    public function criarBaralho() {
        $i=0;          //cada carta pokemon possui um pokemon diferente e o deck possui todas as cartas pokemon
        foreach ($_SESSION['pokemon'] as $nome => $tipo){ 
            $p1= new Pokemon($nome, random_int(1,20), $_SESSION["imagens"][$i], $tipo); 
            $this->deck[] = new cartaPokemon($p1);    
            $i++;
        }
        return $this->deck;
    }
    
    public function sortearCartas() {
        shuffle($this->deck);
        for ($i = 0; $i < $this->qtdcartas; $i++) {
            $this->cartas[] = $this->deck[$i];
            unset($this->deck[$i]);
    }
        return $this->cartas;
    }

    public function apagarVetor() {
        unset($this->cartas);
    }
}
?>