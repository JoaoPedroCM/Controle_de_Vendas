<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="resources/background.css">
    <link rel="stylesheet" href="resources/menu.css">
    <link rel="stylesheet" href="resources/form.css">
    <link rel="stylesheet" href="resources/size.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="resources/icone.png">
    <title>Vendas</title>
</head>

<body>
    <section class="conteudo">
        <center>
            <div class="banner">
                <img src="resources/images/banner.png" alt="">
            </div>
        </center>

        <div class="menu">
            <aside>
                <a href="">Inserir Novo Cliente</a>
                <a href="">Inserir Nova Venda</a>
                <a href="">Vendas Registradas</a>
            </aside>
        </div>

        <center>
            <form method="POST">
                <div class="formulario">
                    <select name="cliente" id="cliente" required>
                        <option value="" selected disabled>Cliente</option>
                        <option value="">Armando Silva</option>
                        <option value="">Sílvio Almeida</option>
                        <option value="">Rosa Alves</option>
                        <option value="">Helena de Souza</option>
                        <option value="">Paulo Marques</option>
                    </select>

                    <textarea name="descricao" id="descricao" rows="5" required spellcheck="False" placeholder=" Descrição - máximo 60 caracteres" maxlength="60"></textarea>

                    <input type="number" required name="valor" min="1" step="0.01" placeholder="Valor R$:">

                    <input type="date" required name="data">
                </div>


                <div class="opcao">
                    <label for="pago">Pago</label>
                    <br />
                    <input type="radio" id="sim" name="pago" value="sim" required>
                    <label for="pago">Sim</label><br>
                    <input type="radio" id="nao" name="pago" value="nao" required>
                    <label for="pago">Não</label><br>
                </div>

                <button type="submit">Salvar</button>
            </form>
        </center>
    </section>

</body>

</html>