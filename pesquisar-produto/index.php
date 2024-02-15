<!DOCTYPE html>
<html>

<head>
    <title>Pesquisa de Produto</title>
    <style>
        /* Estilos para o corpo da página */
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Define a altura da tela inteira */
            background-color: #f7f7f7;
            /* Cor de fundo da tela */
        }

        /* Estilos para o contêiner */
        .container {
            width: 80%;
            background-color: #f0f0f0;
            /* Cor de fundo do container */
            padding: 20px;
            border-radius: 8px;
            /* Adiciona bordas arredondadas ao container */
        }

        /* Estilos para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            /* Cor de fundo do cabeçalho da tabela */
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
            /* Cor de fundo da linha da tabela quando passa o mouse */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Pesquisa de Produto</h2>

        <form method="GET" action="pesquisar.php">
            <label for="codigo_barras">Pesquisar por Código de Barras:</label>
            <input type="text" name="codigo_barras" id="codigo_barras" placeholder="Digite o código de barras">
            <button type="submit">Pesquisar</button>
        </form>

    </div>

</body>

</html>