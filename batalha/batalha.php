<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Batalha </title>
    <link rel="shortcut icon" type="imagex/png" href="../batalha/image/pokebola.png">
    <link rel="stylesheet" href="../batalha/css/stylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require '../classes/tabuleiro.php';

    if (isset($_POST['enviar'])) {
        $_SESSION['jogador1'] = $_POST['jogador1'];
        $_SESSION['jogador2'] = $_POST['jogador2'];

        $t1 = new Tabuleiro($_SESSION['jogador1'], $_SESSION['jogador2']);

        echo "<div class='cartasPlayer1'>";
        echo "<h4 class='branco'> Cartas do(a) Treinador(a) " . $_SESSION['jogador1'] . ": </h4>";
        echo "<br>";
        echo '<div class="row">';

        for ($i = 0; $i < count($t1->j1->cartas); $i++) {
            echo '<div class="col">';
            echo $t1->j1->cartas[$i]->exibirCarta() . "<br>";
            echo "</div>";
        }

        echo "</div>";
        echo "</div>";

        echo "<div class='cartasPlayer2'>";
        echo "<br> <h4 class='branco'> Cartas do(a) Treinador(a) " . $_SESSION['jogador2'] . ": </h4>";
        echo "<br>";
        echo '<div class="row">';

        for ($i = 0; $i < count($t1->j2->cartas); $i++) {
            echo '<div class="col">';
            echo $t1->j2->cartas[$i]->exibirCarta() . "<br>";
            echo "</div>";
        }
        
        echo "</div>";
        echo "</div>";

        echo "<br><br>";
        echo $t1->j1->realizarBatalha($t1->j1, $t1->j2);
        echo "<br><br>";
        echo $t1->j1->verificarFimDeJogo($t1->j2);
        
    }
    ?>
    <div class="text-center">
    <form action="" method="post">
    <button type="submit" class="button mt-1" name="voltar">Voltar ao menu</button>
    </form>
    </div>
    <?php 
    if(isset($_POST["voltar"])){
        header('location: ../usuario/index.php');
    }
    ?>
</body>
</html>