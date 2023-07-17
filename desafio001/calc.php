<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Resultado</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>

        <?php
        $num = $_GET["num"] ?? 0;
        $numAnt = $num - 1;
        $numSuc = $num + 1;

        echo "<p>O número escolhido foi $num</p>";

        echo "<p>O seu antecessor é $numAnt</p>";

        echo "<p>O seu sucessor é $numSuc</p>";

        echo "<button onclick='javascript:history.go(-1)'>\u{2190} Voltar</button>"
        ?>

    </main>
</body>

</html>