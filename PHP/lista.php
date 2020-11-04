<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Página Inicial.</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./lista.php">Lista de Produtos</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php

            require_once "./acoes/db_connect.php";


        ?>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 m-auto">
                    <h3> Lista de Produtos</h3>
                        <table class="table table-responsive table-striped">
                        <tr>
                            <th> Código </th>
                            <th> Nome </th>
                            <th> Descrição </th>
                            <th> Preço </th>
                            <th> Imagem </th>
                            <th> Opções </th>
                        </tr>


        <?php
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

                            <tr>
                                <td>
                                    <?php echo $row['Cod_Produto']; ?> <!-- coloquei igual está na minha tabela sql-->
                                </td>
                                <td>
                                    <?php echo $row['nome']; ?>
                                </td>
                                <td>
                                    <?php echo $row['descricao']; ?>
                                </td>
                                <td>
                                    <?php echo $row['preco']; ?>
                                </td>
                                <td>
                                    <?php echo $row['nomeImagem']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="./atualizar.php?atualizar=<?php echo $row['id']; ?>">Editar</a>|
                                    <a class="btn btn-sm btn-success" href="./detalhe.php?visualizar=<?php echo $row['id']; ?>">Detalhe</a>|
                                    <a class="btn btn-sm btn-danger" href="./actions/deletar_produtos.php?deletar=<?php echo $row['id']; ?>" >Deletar</a>
                                </td>
                            </tr>
        <?php

            }

        ?>
                    
                        </table>
                    </div>
                </div>
            </div>

        <footer class="container">
            <div class="row">
                <div class="col-12 text-center mx-auto">
                    Projeto Site Uma Store &copy 2020
                </div>
            </div>
        </footer>
    </body>
</html>
