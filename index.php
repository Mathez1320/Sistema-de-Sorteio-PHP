<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href ="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action = "index.php">
        <main id = "container-central">
            <h1>SISTEMA DE SORTEIO</h1>
            <label>Nome Completo: </label>
                <input type="text" name = "nomeCompleto"> 

            <label>Código do Sorteio: </label>
                <input type="number" name = "matriculaJogador">

            <label>Insira o seu número da Sorte: </label>
                <input type="number" name = "numeroSorte"> 
                <input id="botao" type="submit" name = "rodar" value = "Sortear"> 

            <div class="main-resultado">
                <h2> Resultado:</h2>

                <?php 
                require('dados.php');
                echo sorteio(); 
                
                ?>
            </div>
        </main>
    </form>
</body>
</html>