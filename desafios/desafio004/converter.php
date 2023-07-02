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
        <h1>Conversor de moedas v2.0</h1>

        <form action="index.html" method="get">
            <div>
                <?php
                    
                    const URL = 'https://economia.awesomeapi.com.br/json/last/USD-BRL';
                    $json = file_get_contents(URL);
                    $obj = json_decode($json);
                    $bid = $obj->USDBRL->bid;
                    
                    
                    echo "Seus <strong>R$" . $_GET["dinheiro"] . "</strong> equivalem a <strong>US$" . $_GET["dinheiro"]*$bid. "</strong>";

                    echo '<p><strong>* Cotação usada R$'.$bid.'</strong> informada diretamente da API';
                ?>
                <input type="submit" value="Voltar" class="btn">
            </div>
        </form>
    </main>
</body>
</html>