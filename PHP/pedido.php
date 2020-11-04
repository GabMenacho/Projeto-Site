<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset = "UTF-8">
    <meta name= "viewport" content="width = device-width, inicial scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title> Fazer Pedido </title>
</head>
<body>

    <div class = "container-FLUID">
        <div class="row">
        <form method="POST" action="./acoes/fazer_pedido.php" class="col-md-6 mx-auto">
            <h4>Efetuar Pedido Uma Store</h4>
            <br>
            <div class="form-group">
                <label for="nomeCliente">Nome do Cliente: </label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço Completo: </label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="preco" name="preco">
            </div>
            <div class="form-group">
                <label for="Cod_Produto">Cod Produto: </label>
                <input type="text" class="form-control" id="Cod_Produto" name="Cod_Produto">
            </div>
            <div class="form-group">
                <label for="preco">Valor Unitário: </label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Disabled input here..." disabled>
            </div>
            <div class="form-group">
                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Quantidade</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Quantidade...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="1">5</option>
                    <option value="2">6</option>
                    <option value="3">7</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total">Valor Total: </label>
                <input type="text" class="form-control" id="total" name="total" placeholder="Disabled input here..." disabled>
            </div>
            
            <button type="submit" name = "fazer_pedido" class="btn btn-primary">Enviar Pedido</button> <!-- Erro aconteceu porque faltou colocar o name = "cadastrar" que é puxado pelo arquivo cadastrar_produtos-->
            </form>
        </div>
    </div>

</body>
</html>