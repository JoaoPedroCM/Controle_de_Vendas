<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="resources/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="resources/icone.png">
    <title>Vendas</title>
</head>

<body>
    <center>
        <div class="banner">
            <img src="resources/banner.png" alt="">
        </div>
    </center>

    <center>
        <form method="POST">
            <div class="formulario">
                <label for="cliente"><strong>Cliente</strong></label>
                <select name="cliente" id="cliente" required>
                    <option value="" selected disabled>Nome</option>
                    <option value="">Armando Silva</option>
                    <option value="">Sílvio Almeida</option>
                    <option value="">Rosa Alves</option>
                    <option value="">Helena de Souza</option>
                    <option value="">Paulo Marques</option>
                </select>

                <label for="descricao"><strong>Descrição</strong></label>
                <textarea name="descricao" id="descricao" rows="5" required spellcheck="False" placeholder="máximo 60 caracteres" maxlength="60"></textarea>

                <label for="valor"><strong>Valor</strong></label>
                <input type="number" required name="valor" min="1" step="0.01" placeholder="R$:">

                <label for="data"><strong>Data</strong></label>
                <input type="date" required name="data">
            </div>

            <label for="pago"><strong>Pago</strong></label>
            <br />
            <div class="opcao">
                <input type="radio" id="sim" name="pago" value="sim" required>
                <label for="pago">Sim</label><br>
                <input type="radio" id="nao" name="pago" value="nao" required>
                <label for="pago">Não</label><br>
            </div>

            <button type="submit">Salvar</button>
        </form>
    </center>

</body>

</html>