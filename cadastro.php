<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" media="">
    <title>Cadastro</title>
</head>
<body>
 
    <div>
        <h1 id="titulo">Cadastro do Usuário</h1>
        <p id="subtitulo">Preencha suas informações</p>
        <br>
    </div>

    <form>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>

        <div class="campo">
            <label for="email"><strong>Email</strong></label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="campo">
            <label><strong>Qual é o seu gênero?</strong></label>
            <label>
                <input type="radio" name="devweb" value="feminino" checked>Feminino
            </label>
            <label>
                <input type="radio" name="devweb" value="masculino">Masculino
            </label>
            <label>
                <input type="radio" name="devweb" value="outros">Outros
            </label>
        </div>

        <div class="campo">
            <label for="qualeoseuestado?"><strong>Qual é o seu estado?</strong></label>
            <select id="qualeoseuestado?" required>
                <option select disabled value="">Selecione</option>
                <option>Acre</option>
                <option>Alagoas</option>
                <option>Amapá</option>
                <option>Amazonas</option>
                <option>Bahia</option>
                <option>Ceará</option>
                <option>Espírito Santo</option>
                <option>Goiás</option>
                <option>Maranhão</option>
                <option>Mato Grosso</option>
                <option>Mato Grosso do Sul</option>
                <option>Minas Gerais</option>
                <option>Pará</option>
                <option>Paraíba</option>
                <option>Paraná</option>
                <option>Pernambuco</option>
                <option>Piauí</option>
                <option>Rio de Janeiro</option>
                <option>Rio Grande do Norte</option>
                <option>Rio Grande do Sul</option>
                <option>Rondônia</option>
                <option>Roraima</option>
                <option>Santa Catarina</option>
                <option>São Paulo</option>
                <option>Sergipe</option>
                <option>Tocantins</option>
                <option>Distrito Federal</option>
            </select>
        </div>

        <fieldset class="grupo">
            <div class="campo">
                <label for="senha"><strong>Senha</strong></label>
                <input type="text" name="senha" id="senha" required>
            </div>

            <div class="campo">
                <label for="confirmarsenha"><strong>Confirme Sua Senha</strong></label>
                <input type="text" name="confirmarsenha" id="confirmarsenha" required>
            </div>
            
        </div>
        <button class="botao" type="submit" onsubmit="">Cadastre-se</button>
    </form>
    
</body>
</html>