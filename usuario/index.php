<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nickname </title>
    <link rel="shortcut icon" type="imagex/png" href="../usuario/wallpaper/pokebola.png">
    <link rel="stylesheet" href="css/mainn.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid justify-content-center">
            <img src="wallpaper/titulo3.png" class="imagem">
        </div>
    </nav>
    <div class="row justify-content-center">
        <div class="pokemon row">
            <form action="../batalha/batalha.php" method="post">

                <p class="texto"> Vamos começar a batalha! Jogadores, informem os seus nomes: </p>
                <div class="row">
                    <div class="col">
                        <p><img src="wallpaper/play1.png" widht=90 height=90"></p>
                        <label for="jogador1">Treinador 1: </label> <br>
                        <input type="text" name="jogador1" required>
                    </div>

                    <div class="col">
                        <div class="x"> X </div>
                    </div>

                    <div class="col">
                        <p><img src="wallpaper/player2.png" widht=90 height=90"></p>
                        <label for="jogador2">Treinador 2: </label> <br>
                        <input type="text" name="jogador2" required>
                    </div>
                </div>
                <br>

                <button type="submit" class="button mt-1" name="enviar"> É hora do duelo! </button>
            </form>
        </div>
    </div>
</body>
</html>