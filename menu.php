<div>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <?php

            include('Inicia_Sessao.php');
            if(!empty($_SESSION['login']));        

        ?>

        <button type="button"><a href="CadastroCidade.html">Cidades</a></button>
        <button type="button"><a href="ListaCidade.php">Ver Cidades</a></button>

        <h1>Você quer cadastrar um cliente ou ver a lista de clientes</h1>
        <button type="button"><a href="CadastroCliente.html">Clientes</a></button>
        <button type="button"><a href="ListaCliente.php">Ver Clientes</a></button>

        <?php

        echo "<li>Olá ". $_SESSION['login']['nome'] ."</li>";      

        ?>
    </ul>
</div>