<?php
class Jogador
{
    public $nome;
    public $partidasPerdidas = 0;
    public $cartas = array();
    public $player2;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function removerCarta($pokemon)
    {
        if (count($this->cartas) > 0 || count($this->cartas) < 7) {
            unset($this->cartas[$pokemon]);
        }
    }

    public function setPartidasPerdidas() {
        $this->partidasPerdidas++;
    }

    public function getPartidasPerdidas() {
        return $this->partidasPerdidas;
    }

    public function realizarBatalha($player1, $player2)
    {
        echo "<h3 class='text-center'>Batalhas</h3>";
        echo "</br>";
        echo "<div class='row text-center'>";
        $i = 0;
        while ($i < 6) {
            echo '<div class="col-4">';
            echo '<img src="'.$this->cartas[$i]->pokemon->foto.'" width="90" height="90">';
            echo  'X';
            echo '<img src="'.$player2->cartas[$i]->pokemon->foto.'" width="90" height="90">';

            echo "<br> <b>" . $this->cartas[$i]->pokemon->nome . "</b> de <i> " . $player1->nome . "</i> nível: " . $this->cartas[$i]->pokemon->nivel . " x <b>" .
                $player2->cartas[$i]->pokemon->nome . " </b> de <i>" . $player2->nome . "</i>  nível: " . $player2->cartas[$i]->pokemon->nivel;

            if ($player1->cartas[$i]->batalhar($player2->cartas[$i])  == 1) {
                echo "<br>" . $this->cartas[$i]->pokemon->nome . " venceu " . $player2->cartas[$i]->pokemon->nome . "<br><br>";
                $player2->setPartidasPerdidas();
                $player2->removerCarta($i);
                echo "</div>";
            } 
            else if ($this->cartas[$i]->batalhar($player2->cartas[$i]) == 2) {
                echo "<br>" . $player2->cartas[$i]->pokemon->nome . " venceu " . $this->cartas[$i]->pokemon->nome . "<br><br>";
                $player1->setPartidasPerdidas();
                $player1->removerCarta($i);
                echo "</div>";
            } 
            else if ($this->cartas[$i]->batalhar($player2->cartas[$i]) == "empate") {
                echo "<br> Empate <br><br>";
                $player1->removerCarta($i);
                $player2->removerCarta($i);
                echo "</div>";
            }
            $i++;
            
        } 
        echo "</div>";
    }

    public function verificarFimDeJogo($player2)
    {
    sort($this->cartas);
    sort($player2->cartas);
    echo "<div class='text-center'>";
    
    //player1 venceu
      if ($this->getPartidasPerdidas() < $player2->getPartidasPerdidas()) {  
        echo "<h5 class='h5derrota'>" . $player2->nome . " foi derrotado(a) " . $player2->getPartidasPerdidas() . " vezes. </h5>";       
        echo "<h5>" . $this->nome . " venceu " . $player2->nome . " com os seguintes pokemons: </h5><br>";
        echo "<div class='row'>";
        for ($i = 0; $i < count($this->cartas); $i++) {
        echo "<div class='col'>";
        echo "<b>" . $this->cartas[$i]->pokemon->nome . "</b> nível: " . $this->cartas[$i]->pokemon->nivel . "<br>";
        echo '<img src="'. $this->cartas[$i]->pokemon->foto.'" widht="90" height="90"> <br><br>';
        echo "</div>";
        }
        echo "</div>";
        
      }

      //player2 venceu
      elseif ($this->getPartidasPerdidas() > $player2->getPartidasPerdidas()) {    
        echo "<h5 class='h5derrota'>" . $this->nome . " foi derrotado(a) " . $this->getPartidasPerdidas() . " vezes. </h5>"; 
        echo "<h5>" . $player2->nome . " venceu " . $this->nome . " com os seguintes pokemons: </h5><br>"; 
        echo "<div class='row'>";
        for ($i = 0; $i < count($player2->cartas); $i++) {
        echo "<div class='col'>";
        echo "<b>" . $player2->cartas[$i]->pokemon->nome . "</b> nível: " . $player2->cartas[$i]->pokemon->nivel . "<br>";
        echo '<img src="'. $player2->cartas[$i]->pokemon->foto.'" widht="90" height="90"> <br><br>';
         echo "</div>";

        }
       echo "</div>";
      }

      //empatou
      else { 
        echo '<br> <h5 class="h5derrota"> "Não acho que quem ganhar ou quem perder, nem quem ganhar nem perder, vai ganhar ou perder. Vai todo mundo perder." </h5>';
        echo "<h5> Ambos os jogadores perderam 3 vezes. </h5>";
      }
      echo "</div>";
    }
}
