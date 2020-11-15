<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css" >
        <script src="../JAVASCRIPT/javascript.js"></script>
        <title>Artistas</title>
    </head>

    <body>
    <?php
            include_once "../PHP/includes/navegacao.php";
    ?>

        <br>
        <br>

        <p align="center"><font color="darkblue">Todos os nossos produtos são produzidos por artistas brasileiros, todas as produções são únicas. Apoie a cultura e a arte brasileira!<br>
        Conheça mais sobre estes artistas, área de atuação, inspirações e outras atividades que desenvolvem!</font></p>


        <div>
            <div id="blocofloat1">
                <div id="div1">
                    <h3>Artistas</h3>
                    <menu>
                        <li>Kkranken</li>
                        <li>Nychder</li>
                        <li>Kcha</li>
                        <li>Nieta Sol</li>
                        <li>Wander</li>
                        <li>Taynara</li>
                    </menu>
                </div>

                <div id="div2">
                    <ul>
                        <h4>Técnicas e atividades</h4>
                        <li>Ilustração Digital</li>
                        <li>Pintura</li>
                        <li>Desenho a mão livre</li>
                    </ul>
                </div>

                <div id="div3">
                    <ul>
                        <h4>Inspirações</h4>
                        <li> Francis Bacon</li>
                        <li>Van Gogh</li>
                        <li>David Bowie</li>
                    </ul>
                </div>
            </div>

            <div id="blocofloat2">
                <div id="div4">
                    <img src="../imagens/kkranken_banner1.png" width="100%">
                </div>
                <div id="div5">
                    <p id="historia">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <?php
            include_once "../PHP/includes/rodape.php";
        ?>
    </body>
</html>