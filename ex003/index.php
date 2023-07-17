<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php
    $num = 0x1A;
    var_dump($num);

    $vet = [6, 2.5, 'Alehandro', 3, false];
    var_dump($vet);

    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa();
    var_dump($p)

    ?>

</body>

</html>