<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número analisado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            echo "<p>Número escolhido: " . $_GET["numero"] . "!</p>";
            echo "<p>O seu antecessor é: " . $_GET["numero"]-1 . "!</p>";
            echo "<p>O seu sucessor é: " . $_GET["numero"]+1 . "!</p>";
        ?>
    </main>
</body>
</html>