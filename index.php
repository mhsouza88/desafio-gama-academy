<?php
include_once './conexao.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobsNET - Conectando você ao seu futuro emprego!</title>
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/index.css">
    <script src="assets/index.js" defer></script>
</head>
<body>
<!-- Cabeçalho -->
    <header>
        <img src="assets/logo.svg" width="20%">
<!-- Navbar -->
    <nav>
        <li></li><a href="index.php">Home</a></li>
        <li></li><a href="us.html">Quem Somos</a></li>
    </nav>
    </header>
<!-- Texto-->
    <div>
        <h2>Seja bem-vindo(a)!</h2>
    </div>
    <div class="container" id="textinho">
        <p>Cadastre hoje mesmo o seu currículo em nosso banco de dados e seja visto por milhares de empregadores na área de tecnologia! Preencha o formulário abaixo com todos os dados corretamente e em breve entraremos em contato com você.</p>
    </div>
<!-- Formulário -->
<?php
                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if(!empty($dados['caduser'])) {
                    $empty_input = false;
                    $query_usuario = "INSERT INTO usuarios (nome, profissao, nascimento, estadocivil, sexo, endereco, bairro, cidade, estado, cep, telefone, celular, email, cpf) VALUES ('" . $dados['nome'] . "','" . $dados['profissao'] . "','" . $dados['nascimento'] . "','" . $dados['estadocivil'] . "','" . $dados['sexo'] . "','" . $dados['endereco'] . "','" . $dados['bairro'] . "', '" . $dados['cidade'] . "','" . $dados['estado'] . "','" . $dados['cep'] . "','" . $dados['telefone'] . "','" . $dados['celular'] . "','" . $dados['email'] . "','" . $dados['cpf'] . "') ";
                    $cad_usuario = $conn->prepare($query_usuario);
                    $cad_usuario->execute();
                    if ($cad_usuario->rowCount()) {
                        echo "<h3 style='color: green; text-align: center'>Currículo enviado com sucesso!</h3>";
                        unset($dados);
                    } else {
                        echo "<h3 style='color: red; text-align: center'>CPF já cadastrado.</h3>";
                    }
            }
            ?>
    <div class="container" id="form">
    <form name="cadastro" action="" autocomplete="on" method="POST"> 
        <fieldset>
    <legend>DADOS PESSOAIS</legend>
    <label for="nome" class="form-group required">Nome completo:</label>
    <input type="text" id="nome" name="nome" required size="40px">
    <label for="profissao" class="form-group required">Profissão:</label>
    <input type="text" id="profissao" name="profissao" required><br>
    <label for="nascimento" class="form-group required">Data de nascimento:</label>
    <input type="date" id="nascimento" name="nascimento">
    <label for="estadocivil">Estado Civil:</label>
    <select id="estadocivil" name="estadocivil">
        <option value="">Selecione</option>
        <option value="solteiro">Solteiro(a)</option>
        <option value="casado">Casado(a)</option>
        <option value="divorciado">Divorciado(a)</option>
        <option value="viuvo">Viúvo(a)</option>
        </select>
    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo">
        <option value="">Selecione</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro(a)</option>
    </select><br>
    <label for="endereco" class="form-group required">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required placeholder="Ex: Nome da Rua, 56, Bloco 2, APTO 301" size="50px">
    <label for="bairro" class="form-group required">Bairro:</label>
    <input type="text" id="bairro" name="bairro" required size="30px"><br>
    <label for="cidade" class="form-group required">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required size="30px">
    <label for="estado" class="form-group required">Estado:</label>
    <input type="text" id="estado" name="estado" required>
    <label for="cep" class="form-group required">CEP:</label>
    <input type="text" id="cep" name="cep" required><br>
    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" size="30px">
    <label for="tel" class="form-group required">Celular:</label>
    <input type="tel" id="celular" name="celular" required size="30px"><br>
    <label for="email" class="form-group required">E-mail:</label>
    <input type="email" id="email" name="email" required size="30px">
    <label for="tel" class="form-group required">CPF:</label>
    <input type="tel" id="cpf" name="cpf" required size="30px" placeholder="Digite apenas números">   
    <br><br>
    <input type="submit" class="enviar" value="Enviar" name="caduser">
        </fieldset>
        </form>
    </div>
<!-- Rodapé -->
<footer>
    <div id="social">
        <img src="assets/facebook.png" height="30px" width="30px" title="@JobsNEToficial">
        <img src="assets/instagram.png" height="30px" width="30px" title="@JobsNEToficial">
        <img src="assets/linkedin.png" height="30px" width="30px" title="@JobsNEToficial">
        <img src="assets/whatsapp.png" height="30px" width="30px" title="+ 55 (21) 99999-9999"><br>
    </div>
</div>
<!-- Disclaimer -->
<div class="container" id="disclaimer">
    <p>* Este não é um site verdadeiro. É um projeto para o desafio da Gama Academy.</p>
</div>
<div class="canto">
    <img src="assets/gama.png" width="80%" title="Desafio #1: Banco de Currículos"><br>
    <img src="assets/github.png" width="100%" title="GitHub: @mhsouza88"><br>
</div>
</footer>
</body>
</html>