<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Randomizando número</title>
</head>

<body>
    <main>
        <p>Vamos gerar um número de <strong>0 a 100...</strong></p>

        <?php
        $num = rand(0, 100);

        echo "<p>O número gerado foi <strong>$num</strong></p>"
        ?>

        <button onclick="javascript:document.location.reload()">&#128260; Gerar Novamente</button>
    </main>

</body>

</html>