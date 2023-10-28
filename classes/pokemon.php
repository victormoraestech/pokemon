<?php
session_start();

class Pokemon
{
    public $nome;
    public $nivel;
    public $foto;
    public $tipo;

    public function __construct($nome, $nivel, $foto, $tipo)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->foto = $foto;
        $this->tipo = $tipo;
    }

    public function getFormatar()
    {
        return "<b>" . $this->nome . "</b> <br> Nível: " . $this->nivel . " <br> Foto: " . $this->foto . " <br> Tipo: " . $this->tipo . "<br><br>";
    }
}

$_SESSION['pokemon'] = array(
    "Rayquaza" => "Dragon",
    "Mudkip" => "Water",
    "Pikachu" => "Electric",
    "Hitmonlee" => "Fighting",
    "Absol" => "Dark",
    "Charmander" => "Fire",
    "Bulbassauro" => "Grass",
    "Lucario" => "Fighting",
    "Gengar" => "Hunter",
    "Mew" => "Psychic",
    "Mewtwo" => "Psychic",
    "Arbok" => "Poison",
    "Sandslash" => "Ground",
    "Flareon" => "Fire",
    "Gyarados" => "Flying",
    "Gardevoir" => "Psychic",
    "Snorlax" => "Normal",
    "Wobbuffett" => "Water",
    "Caterpie" => "Bug",
    "Umbreon" => "Dark",
    "Groudon" => "Ground",
    "Onix" => "Ground",
    "Arceus" => "Normal",
    "Glaceon" => "Ice",
    "Sawsbuck" => "Grass",
    "Cofagrigus" => "Ghost"
);

$_SESSION["imagens"] = glob("../imagens/*.png");

?>