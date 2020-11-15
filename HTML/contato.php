<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css" >
        <script src="../JAVASCRIPT/javascript.js"></script>
        <title>Contato</title>
    </head>

    <body>

    <?php
            include_once "../PHP/includes/navegacao.php";
    ?>

    <br>
    <br>

    <p>Gostaria de vender os seus trabalhos artísticos? Preencha nosso formulário e entraremos em contato!</p>

    <p>Formulário de interesse</p>
                
            <form>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pname" >Nome:</label>
                        <input type="text" class="form-control" id="pname" name="fnome">
                    </div>

                    <div class="form-group">
                    <label for="pgenero">Gênero:</label><br>
                    <input type="radio" id="feminino" class="form-radio-input" name="genero" value="feminino-selecionado">
                    <label for="feminino" class="form-radio-label">Feminino</label><br>
                    <input type="radio" id="masculino" name="genero" value="masculino-selecionado">
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" id="outros" name="genero" value="outros-selecionado">
                    <label for="outros">Outros</label>  
                    </div>
                    
                    <div class = "form-group">
                    <label for="mail">Cidade:</label>
                    <input type="text" id="cidade" class="form-control" name="city">
                    </div>

                    <div class = "form-group">
                    <label for="num">Número de telefone:</label>
                    <input type="number" id="num" class="form-control" name="num">
                    </div>

                    <div class = "form-groupd">
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" class="form-control">
                    </div>

                    <div class = "form-group form-check">
                    <label>Quais tipos de arte você cria?<br>Marque sua(s) resposta(s).</label><br>
                    
                    <input type="checkbox" id="ilustracao" class = "form-check-input" name="ilustracao" value="ilustracao">
                    <label for="ilustracao" class = "form-check-label" >Ilustração (digital, pintura, mão livre, quadrinhos)</label><br>
                    
                    <input type="checkbox" id="escultura" class = "form-check-input" name="escultura" value="escultura">
                    <label for="escultura" class = "form-check-label">Escultura (diversos)</label><br>
                    
                    <input type="checkbox" id="objetos" class = "form-check-input" name="objetos" value="objetos">
                    <label for="objetos" class = "form-check-label">Objetos lúdicos</label><br>

                    <input type="checkbox" id="outros" class = "form-check-input" name="outros" value="outros">
                    <label for="outros" class = "form-check-label">Outros</label>
                    <input type="text" id="escreva" name="escreva" value="Especifique">
                    </div>
          
                    <div class = "form-group">
                    <label for="msg">Conte-nos um pouco sobre você e seus trabalhos:</label><br>
                    <textarea id="msg" rows="10" cols="50"></textarea><br><br>
                    </div>
          
                    <button type = "submit" class="btn btn-primary" onclick="botaoEnviar()">Enviar</button>
                </div>
            </form>
      <br>

      <hr>
      <h5 align="center"><font face="arial" color="red">Para outras informações, entre em contato:</font></h5>
      <p align="center">(11) 95555-5555</p>
      <br>

      <?php
            include_once "../PHP/includes/rodape.php";
        ?>
    </body>
</html>