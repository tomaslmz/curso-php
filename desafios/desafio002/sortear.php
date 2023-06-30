<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar números</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <main>
        <h1>Sorteio de números</h1>

        <p>De 0 a 100</p>

        <form action="sortear.php" method="get">
            <?php 
                echo "<p>O número sorteado foi <strong>" . rand(0, 100) . "</strong>!" 
            ?>
            <div class="btn-container">
                <input type="submit" value="Sortear" class="btn">
            </div>
        </form>
    </main>
</body>
</html>