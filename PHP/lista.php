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

