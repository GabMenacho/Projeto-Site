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
                
            <div align ="center">
                <form class="forminteresse">
                 <ol type="1">
                    <li><label for="pname">Nome:</label></li>
          
                    <input type="text" id="pname" name="fnome"><br><br>

                    <li><label for="pgenero">Gênero:</label></li>
                    <input type="radio" id="feminino" name="genero" value="feminino-selecionado"><label for="feminino">Feminino</label>
                    <br>
	                <input type="radio" id="masculino" name="genero" value="masculino-selecionado"><label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outros" name="genero" value="outros-selecionado" checked><label for="outros">Outros</label>  
	                <br>
	                <br>

                    <li><label for="mail">Cidade:</label></li>
          
                    <input type="text" id="cidade" name="city"><br><br>
          
                    <li><label for="num">Número de telefone:</label></li>
          
                    <input type="number" id="num" name="num"><br><br>

                    <li><label for="mail">E-mail:</label></li>
          
                    <input type="mail" id="mail"><br><br>

                    <li><label>Quais tipos de arte você cria?<br>Marque sua(s) resposta(s).</label></li>
                    <input type="checkbox" id="ilustracao" name="ilustracao" value="ilustracao"><label for="ilustracao">Ilustração (digital, pintura, mão livre, quadrinhos)</label><br>
                    <input type="checkbox" id="escultura" name="escultura" value="escultura"><label for="escultura">Escultura (diversos)</label><br>
                    <input type="checkbox" id="objetos" name="objetos" value="objetos"><label for="objetos">Objetos lúdicos</label><br>
                    <input type="checkbox" id="outros" name="outros" value="outros"><label for="outros">Outros</label> <input type="text" id="escreva" name="escreva" value="Especifique"><br><br>
                    <br><br>
          
                    <li><label for="msg">Conte-nos um pouco sobre você e seus trabalhos:</label></li>
          
                    <textarea id="msg" rows="10" cols="50"></textarea><br><br>
          
          
                    <button onclick="botaoEnviar()">Enviar</button>
                    </ol>
                </form>
            </div>
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