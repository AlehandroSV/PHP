<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Conversor de Moeda</title>
</head>

<body>
    <main>
        <h1>Conversor de Moeda v1.0</h1>
        <?php
        $cotacao = 4.81;
        $real = $_GET['num'] ?? 0;

        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>"
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>