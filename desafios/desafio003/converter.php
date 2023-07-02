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
        <h1>Conversor de moedas v1.0</h1>

        <form action="index.html" method="get">
            <div>
                <?php 
                    echo "Seus <strong>R$" . $_GET["dinheiro"] . "</strong> equivalem a <strong>US$" . $_GET["dinheiro"]*5.22 . "</strong>";
                ?>
                <p><strong>* Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
                <input type="submit" value="Voltar" class="btn">
            </div>
        </form>
    </main>
</body>
</html>