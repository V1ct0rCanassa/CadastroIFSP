<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include('includes/conexao.php');
        
        // Coletando os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id_cidade = $_POST['idcidade'];

        echo "<h1>Dados do cliente</h1>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Senha: $senha <br>";
        echo "Id Cidade: $id_cidade <br>";

        // Query SQL para inserir dados na tabela cliente
        $sql = "INSERT INTO cliente (nome, email, senha, id_cidade) ";
        $sql .= "VALUES ('$nome', '$email', '$senha', '$id_cidade')";

        echo $sql; // Apenas para debug, pode ser removido posteriormente

        // Executando a query no banco de dados
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            echo "<h2>Dados Cadastrados com Sucesso</h2>";
        } else {
            echo "<h2>Erro ao cadastrar!</h2>" . mysqli_error($con);
        }
    ?>
</body>
</html>
