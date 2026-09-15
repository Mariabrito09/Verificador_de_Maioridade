<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de maioridade</title>
</head>
<body>
    <form action="" method="post">

        <h2>Verificador de maioridade</h2>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>

        <label for="senha">Ano de Nascimento: </label>
        <input type="text" name="ano_nascimento" required>

        <button type="submit">Verificar</button>
    </form>

    <?php

    //Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Receber os valores 
        $nome = $_POST['nome'];
        $ano = $_POST['ano_nascimento'];
        $idade = date("Y") - $ano;

        if ($idade >= 18) {

        //Abre/cria arquivo (usuarios.txt) para guardar os dados
        //O "a" vem de append, que do inglês significa "acrescentar"
        $arquivo = fopen('log_acessos.txt', 'a');

        //Cria uma linha com nome e ano separados por ";"
        $linha = $nome . ';' . $ano . "\n";

        //Escrever a linha do arquivo 
        //fwrite() escreve o conteúdo variável no arquivo
        fwrite($arquivo, $linha);

        //fclose: fechar o arquivo
        fclose($arquivo);

        //Mensagem 
        echo "<script>alert('Acesso permitido, $nome!')</script>";
        }

        else {
            echo "<script>alert('Acesso negado, $nome!')</script>";
        }
    }
    ?>
</body>
</html>