<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css" >
        <script src="../JAVASCRIPT/javascript.js"></script>
        <title>Home</title>
    </head>

    <body>

        <?php
            include_once "../PHP/includes/navegacao.php";
        ?>
        
        <br>
        <br>



            <h2 class="font-weight-lighter text-md-center">Aqui você encontra:</h2>

            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-4 mb-md-0 p-md-4">
                    <img  id="imgkkraken" src="../imagens/kkrankenbruder4.jpg" class="w-100" alt="Ilustração Digital de Kkrankenbruder" onmouseover="trocarImagem1(1);" onmouseout="trocarImagem1(0);">
                </div>
                <div class="col-md-4 position-static p-4 pl-md-0">
                    <h5 class="mt-0">Inspirações Ilustradas</h5>
                    <p class="text-md-left">Encontre ilustrações digitais, pinturas, desenhos a mão livre, quadrinhos. Diversos estilos e temas. Encontre criações de artistas brasileiros.</p>
                    <a href="artistas.html" class="stretched-link">Conheça os artistas</a>
                </div>
            </div>

            <br>
            <br>

            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-4 mb-md-0 p-md-4">
                    <img  id="imgnieta" src="../imagens/nieta4.jpg" class="w-100" alt="Cerâmica de Nieta del Sol" onmouseover="trocarImagem2(1);" onmouseout="trocarImagem2(0);">
                </div>
                <div class="col-md-4 position-static p-4 pl-md-0">
                    <h5 class="mt-0">Inspirações Esculpidas</h5>
                    <p class="text-md-left">Encontre objetos para sua casa feitos de forma artesanal. Encontre vasos, pratos de cerâmica, potes e mais. </p>
                    <a href="artistas.html" class="stretched-link">Conheça os artistas</a>
                </div>
            </div>

            <br>
            <br>

            <div class="row no-gutters bg-light position-relative">
                <div class="col-md-4 mb-md-0 p-md-4">
                    <img  id="imgwander" src="../imagens/Wander5.jpg" class="w-100" alt="Pássaros de madeira de Wander Rodrigues" onmouseover="trocarImagem3(1);" onmouseout="trocarImagem3(0);">
                </div>
                <div class="col-md-4 position-static p-4 pl-md-0">
                    <h5 class="mt-0">Inspirações Lúdicas</h5>
                    <p class="text-md-left">Procurando uma inspiração que transporta você a outros mundos? Encontre peças únicas, ideias materializadas de artistas que te tramsportam para sseus espaços lúdicos. </p>
                    <a href="artistas.html" class="stretched-link">Conheça os artistas</a>
                </div>
            </div>


        <br>
        <br>

        <?php
            include_once "../PHP/includes/rodape.php";
        ?>

        
    </body>
</html>