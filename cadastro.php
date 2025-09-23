<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <style>
    </style>
    <title>Cadastro de alunos</title>
</head>
<body>
    <div id="cadastro">
        <h1>Cadastro do Aluno</h1>
        <form action="teste.php" method="post">
            <label for="rm"></label>
            <input type="number" name="rm" id="rm" placeholder = "RM " required>
            <label for="nome"></label>
            <input type="text" name= "nome" id="nome" placeholder = "Nome" require >
            <label for="email"></label>
            <input type="text" name="email" id="email" placeholder = "Email" require>
            <label for="senha"></label>
            <input type="text" name="senha" id="senha" placeholder = "Senha " require>
            <label for="cpf"> </label>
            <input type="text" name="cpf" id="cpf" placeholder = "CPF " require>
            <input type="submit" value="Cadastrar" id="cadastrar">
    </div>
        </form>  
</body>
</html>