<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Compra</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Nova Compra</h2>
        <p>Deseja confirmar a nova compra?</p>

        <form method="post" action="processar_compra.php">
            <button a class="button" type="submit" name="acao" value="confirmar"><a href="#"></a>Sim</button>
            <button class="button" type="submit" name="acao" value="cancelar"><a href="#"></a>Não</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['acao'])) {
            $acao = $_POST['acao'];

            if ($acao === 'confirmar') {
                // Lógica para confirmar a compra
                echo "Compra confirmada!";
            } elseif ($acao === 'cancelar') {
                // Lógica para cancelar a compra
                echo "Compra cancelada.";
            }
        }
    }
    ?>

</body>

</html>