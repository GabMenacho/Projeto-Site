<!-- linkar o index -->
<?php

    require_once "db_connect.php"; //linka o arquivo que conecta o banco de dados

    if(isset($_POST['fazer_pedido'])) { //erro estava no $_Post - estava sem o underline

        $nomeCliente = $_POST['nomeCliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $Cod_Produto = $_POST['Cod_Produto'];
        $preco = ; //ainda não sei como colocar o preço aqui puxando o valor pelo codigo
        $quantidade = $_POST['quantidade'];
        $total = $preco * $quantidade; 

        $sql = "INSERT INTO pedido VALUES (null, '$nome', '$descricao', '$preco', '$nomeImagem')"; //comando sql para inserir os dados no bd
        mysqli_query($connect, $sql);

        header("Location: ../index.php");

    }

?>