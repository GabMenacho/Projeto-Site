<!-- linkar o index -->
<?php

    require_once "db_connect.php"; //linka o arquivo que conecta o banco de dados

    if(isset($_POST['cadastrar'])) { //erro estava no $_Post - estava sem o underline

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $nomeImagem = $_POST['nomeImagem'];

        $sql = "INSERT INTO produtos VALUES (null, '$nome', '$descricao', '$preco', '$nomeImagem')"; //comando sql para inserir os dados no bd
        mysqli_query($connect, $sql);

        header("Location: ../index.php");

    }

?>