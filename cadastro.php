<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>

<style>
    input{
        font-size: 20px;
        padding: 5px;
        margin-top: 5px;
        margin-left: 5px;
    }

    label{
        padding: 10px;
        margin-right: 5px;
    }

    button{
        margin-top:45px;
        font-size: 20px;
        background-color: aquamarine;
        cursor: pointer;
        margin-left: 30%;
    }

    .cad{
        height: 300px;
        width: 850px;
        background-color: bisque;
    }
    h1{
        text-align:center;
    }
</style>
<body>
    <div class="cad">
<h1>CADASTRO USUÁRIO:</h1>
<form method="POST"action="envia.php">

<label for="nome">Nome:</label>
<input type="text" id="nome" size="60" name="nome" maxlength="100"><br>

<label for="idade">Idade:</label>
<input type="number" id="idade"  name="idade">

<label for="cpf">Cpf:</label>
<input type="text" id="cpf" size="28" name="cpf" maxlength="14" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required title="Digite o Cpf no formato 999.999.999-99"><br>

<button type="submit">Enviar Dados</button>

</form>


    </div>
    
</body>
</html>