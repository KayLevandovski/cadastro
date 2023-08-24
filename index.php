<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" media="">
    <title>Área do Usuário</title>
</head>
<body>
<div>
        <h1 id="titulo">Login</h1>
        <br>
    </div>

    <form>
        <fieldset class="grupo">
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>

        <fieldset class="grupo">
            <div class="campo">
                <label for="senha"><strong>Senha</strong></label>
                <input type="text" name="senha" id="senha" required>
            </div>
        
        </div>
        <button class="botao" type="submit" onsubmit="">Login</button>
        <a href="dashboar.php"></a>
    </form>


    <div class="a">
    <a href="cadastro.php">Clique aqui para criar uma conta</a>
    </div>
</body>
</html>