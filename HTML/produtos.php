<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../CSS/estilos.css" >
        <title>Produtos</title>
        <script src="../JAVASCRIPT/javascript.js"></script>
    </head>

    <body>

    <?php
            include_once "../PHP/includes/navegacao.php";
    ?>

        <br>
        <br>

        <p align="center"><font face="Arial">Encontre UMA inspiração!</font></p>
        <hr>


        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-sticky pt-3">
                    <li>Artista</li>
                    <ul class="nav flex-column artista">
                        <li class="nav-item"><a class="nav-item active" href="#"> Kkraken</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Nychder</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Kcha</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Nieta Sol</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Wander</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Taynara</a></li>
                    </ul>

                    <br>

                    <li>Materiais</li>
                    <ul class="nav flex-column materiais">
                        <li class="nav-item"><a class="nav-item active" href="#"> Cerâmica</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Digital</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Madeira</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Papel</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Tecido</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Tela</a></li>
                    </ul>

                    <br>

                    <li>Tipo</li>
                    <ul class="nav flex-column tipo">
                        <li class="nav-item"><a class="nav-item active" href="#">Pintura</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Fotografia</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Gravura</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Digital</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Objeto</a></li>
                        <li class="nav-item"><a class="nav-item active" href="#">Livre</a></li>
                    </ul>

                    <br>

                        <li>Cor</li>
                        <menu>
                        <table>
                            <tr>
                                <td bgcolor="white"><font color="black">Branco</font></td>
                                <td bgcolor="black"><font color="white">Preto</font></td>
                                <td bgcolor="brown"><font color="white">Terra</font></td>
                            </tr>
                            <tr>
                                <td bgcolor="blue"><font color="white">Azul</font></td>
                                <td bgcolor="green"><font color="white">Verde</font></td>
                                <td bgcolor="purple"><font color="white">Roxo</font></td>
                            </tr>
                        </table>
                        </menu>
                    </div>
                </div>


                <div class="col-sm-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="../imagens/kkrankenbruder1.jpg" class="img-thumbnail img-fluid " onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/kkrankenbruder2.jpg" class="img-thumbnail img-fluid " onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/kkrankenbruder3.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">50,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">70,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">30,00</div>
                        </div>

                        <br>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="../imagens/nieta1.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/nieta2.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/nieta3.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">60,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">80,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">70,00</div>
                        </div>

                        <br>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="../imagens/kcha1.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/kcha2.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                            <div class="col-sm-4">
                                <img src="../imagens/kcha3.jpg" class="img-thumbnail img-fluid" onclick="zoom(this)" ></img>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">50,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">70,00</div>
                            <div class="col-sm-2">Preço:</div>
                            <div class="col-sm-2">120,00</div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <br>
        <hr>

            <div><!--criando uma divisão para meu rodapé-->
                <p>Inscreva-se na nossa newsletter e ganhe um cupom de 10% off</p>
                <form method="post">
                    <label name="nome">Nome</label>
                    <input type="text" name="nome" id="Digite seu Nome">
                    <label name="email">E-mail:</label>
                    <input type="email" name="email" id="Digite seu Email">
                    <button onclick="inscricao()">Enviar</button>
                </form>
            </div>

        <br>

        <?php
            include_once "../PHP/includes/rodape.php";
        ?>
    </body>
</html>
