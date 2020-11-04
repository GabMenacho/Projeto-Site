<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset = "UTF-8">
    <meta name= "viewport" content="width = device-width, inicial scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title> Cadastro de Produtos </title>
</head>
<body>

    <div class = "container-FLUID">
        <div class="row">
        <form method="POST" action="./acoes/cadastrar_produtos.php" class="col-md-6 mx-auto">
            <h4>Cadastro de Produtos Uma Store</h4>
            <br>
            <div class="form-group">
                <label for="nome">Nome do Produto: </label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="preco">Preço: </label>
                <input type="text" class="form-control" id="preco" name="preco">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>
            <div class="form-group">
                <label for="nomeImagem">Nome Imagem: </label>
                <input type="text" class="form-control" id="nomeImagem" name="nomeImagem">
            </div>
            <button type="submit" name = "cadastrar" class="btn btn-primary">Cadastrar</button> <!-- Erro aconteceu porque faltou colocar o name = "cadastrar" que é puxado pelo arquivo cadastrar_produtos-->
            <a href="./lista.php" class = "btn btn-success">Consultar Produtos</a>
            </form>
        </div>
    </div>

</body>
</html>