<?php 
include 'pokemon.php';

class CartaPokemon {
    public $pokemon;
    public function __construct($pokemon){
    $this->pokemon = $pokemon;
    }

    public function batalhar($enemy){
        if($this->pokemon->nivel > $enemy->pokemon->nivel){
            return 1;
        }
        else if($this->pokemon->nivel < $enemy->pokemon->nivel){
            return 2;
        }
        else{
            return "empate";
        }
    }


public function exibirCarta() {
    echo "<div class='row justify-content-center'>";
    echo "<div class='col'>";
    echo '<img src="' . $this->pokemon->foto . '" widht="90px" height="90px" > <br>';
    echo $this->pokemon->nome . "<br>";
    echo "Tipo: " . $this->pokemon->tipo . "<br>";
    echo "</div>";
    echo "</div>";

}
}
