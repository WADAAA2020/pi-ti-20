<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codigo inteiro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="codigo-container">
        <h2>Código</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="codigo_produto" placeholder="Digite o código do produto" required>
            <button class="button" type="submit">Consultar Item</button>
        </form>
        <div>
            <?php
            // Array associativo simulando um banco de dados
            $database = array(
                "123" => "Produto A",
                "456" => "Produto B",
                "789" => "Produto C"
            );

            // Verifica se o formulário foi enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtém o código do produto do formulário
                $codigoProduto = $_POST["codigo_produto"];

                // Verifica se o código existe no banco de dados simulado
                if (array_key_exists($codigoProduto, $database)) {
                    // Se existe, exibe o nome do produto
                    echo "<h2>Item:</h2>";
                    echo "<p>{$database[$codigoProduto]}</p>";
                } else {
                    // Se não existe, exibe uma mensagem de erro
                    echo "<p>Código de produto não encontrado.</p>";
                }
            }
            ?>

        </div>
    </div>

</body>

</html>