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
                <a href="novo_cliente.php">Inserir Novo Cliente</a>
                <a href="index.php">Inserir Nova Venda</a>
                <a href="">Inserir Novo Cliente</a>
                <a href="">Clientes Registrados</a>
                <a href="">Vendas Registradas</a>

            </aside>
        </div>

        <center>
            <form method="POST">
                <div class="formulario">

                    <input type="text" required name="nome" placeholder="Nome" maxlength="40">
                    <input type="text" required name="telefone" id="telefone" placeholder="Telefone: Ex: (XX)XXXXX-XXXX">
                    <input type="email" required name="email" placeholder="E-mail" maxlength="40">
                    <input type="text" required name="endereco" placeholder="Endereço" maxlength="60">
                </div>

                <button type="submit">Salvar</button>
            </form>
        </center>
    </section>

    <script>
        var telefone = document.getElementById("telefone");
        telefone.addEventListener("input", () => {
            //Tratar entrada do telefone utilizando Regex (Expressão Regular)
            var entrada = telefone.value.replace(/\D/g, "").substring(0, 11);
            var numeros = entrada.split("");
            var numero_tratado = ""
            if (numeros.length > 0) {
                numero_tratado += `(${numeros.slice(0,2).join("")})`
            }
            if (numeros.length > 2) {
                numero_tratado += ` ${numeros.slice(2,7).join("")}`
            }
            if (numeros.length > 7) {
                numero_tratado += `-${numeros.slice(7,11).join("")}`
            }

            telefone.value = numero_tratado;
        })
    </script>

</body>

</html>