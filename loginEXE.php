<?php
    include('includes/conexao.php');
    
    // Coletando os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    $sql = "select * from cliente
            where email = '$email'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['senha'] == $senha){

            include('Inicia_Sessao.php');
            $_SESSION['login'] = $row;
            //Volta para a pagina inicial
            header('Location: index.php');

        }else{

            echo "<h1>Sua senha está errada! Sua senha é " . $row['senha']."</h1>";

        }

    }else{

        echo "<h1>Usuário não encontrado</h1>";

    }
?>