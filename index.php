<html>
    <head>
        <title>BootStrap <?php echo $_GET['op']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Image and text -->
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand" href="index.php">
                             <img src="img/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                Top Suplementos
                        </a>
                    </nav>
                </div>
            </div>
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                 <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?op=2">O que fazemos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?op=3">Produtos</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Contato
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="index.php?op=4">Telefone e endereço</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <?php if(!isset($_GET['op'])) { ?>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/is1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/is2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/is3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col">
                                &nbsp;
                            </div>
                        </div>
                        <div class="col">
                            <figure class="figure">
                                <img src="img/s1.png" style=text-align:left class="figure-img img-fluid rounded"
                                    alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption text-right">Whey Gold Standard - 100%</figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure class="figure">
                                <img src="img/s2.jpg" style=text-align:center class="figure-img img-fluid rounded"
                                    alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption text-right">Whey Protein Nutri
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col">
                            <figure class="figure">
                                <img src="img/s3.png" style=text-align:right class="figure-img img-fluid rounded"
                                    alt="A generic square placeholder image with rounded corners in a figure.">
                                <figcaption class="figure-caption text-right">Isofort Whey High Protein
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                <?php }else{ ?>
                <?php if($_GET['op'] == 2) { ?>
                    <div class="row">
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="d-block w-100" src="img/1.1.png">
                                &nbsp;
                            <h3>
                                <strong>A melhor empresa de suplementos!</strong>
                            </h3>
                            <h5>Visando ao máximo entregar o melhor para o cliente, nós da Top Suplementos, possuímos as melhores
                                    parcerias
                                    e entregamos o melhor produto para o cliente! Resultados quase que imediatos!</h5>
                        </div>
                        <div class="col">
                            <h3>
                                <strong>O que fazemos:</strong>
                            </h3>
                            &nbsp;
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Sobre nós
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Sobre nossa empresa:</strong> A nossa empresa é basicamente
                                                uma distribuidora de suplementos de vários fornecedores.
                                                Importamos e exportamos diversos tipos de suplementos de várias marcas
                                                diferentes para melhor acessibilidade de nossos clientes.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Parceiros
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>A seguir nossos parceiros:</strong> Trabalhamos com diversas marcas
                                                famosas, incluindo:
                                            <br></br>
                                            <strong>Growth Suplementos, Max Titanium, Atlhetica Nutrition, GO Nutrition, Prostar e
                                                    BSN.</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Estoque
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Nosso estoque está sempre cheio e com novos produtos, estamos sempre investindo em busca
                                            da renovação de contratos
                                            e de formas de manter nossos produtos atualizados pra nossos clientes, para mais
                                            detalhes, vá até a aba de <a href="html2.html">Produtos</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Por que comprar na Top Suplementos
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Além de oferecermos um ótimo atendimento, termos um ótimo suporte e, além de tudo,
                                            atender a 100% das expectativas
                                            dos clientes, nossos produtos são de alta qualidade e oferecem resultados quase que
                                            imediatos no desempenho do seu treino!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else if($_GET['op'] == 3) { ?>
                        <div class="row">
                            <div class="col">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img class="d-block w-100" src="img/pg3.png">
                            </div>
                            <div class="col">
                                <h3>
                                    <strong>Produtos:</strong>
                                </h3>
                                &nbsp;
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Qualidade
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Qualidade 100% garantida!</strong> Trabalhos com revisões extremamente
                                                detalhadas
                                                de nossos produtos, visando ao máximo entregar algo em boa qualidade e dentro do prazo
                                                de validade.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Compras
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                As compras são realizadas presencialmente em nossas lojas, estamos organizando
                                                ainda um serviço de compra online, que até o momento, não se encontra possivel.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Produtos
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Possuimos:

                                                <br></br>
                                                • Whey Protein
                                                <br></br>
                                                • Hipercalórico
                                                <br></br>
                                                • Creatina
                                                <br></br>
                                                • BCAA
                                                <br></br>
                                                • Glutamina
                                                <br></br>
                                                <strong>• Termogênicos, tais como:</strong>
                                                <br></br>
                                                - A base de cafeína
                                                <br></br>
                                                - A base de capsaicina
                                                <br></br>
                                                - A base de sinefrina
                                                <br></br>
                                                <strong>Possuimos também produtos para uso com receita médica: </strong>
                                                <br></br>
                                                • Demonio da capa branca
                                                <br></br>
                                                • Trembolona
                                                <br></br>
                                                • GH
                                                <br></br>
                                                • Metandriol
                                                <br></br>
                                                • Fluoximetil
                                                <br></br>
                                                • Metil testosterona
                                                <br></br>
                                                <strong>Outros a serem negociados na loja...</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } else{ ?>
                        <div class="row">
                            <div class="col">
                                &nbsp;
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img class="d-block w-100" src="img/loja.jpg">
                            </div>
                            <div class="col">
                                <h3>
                                    <strong>Contato:</strong>
                                </h3>
                                &nbsp;
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Telefone
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Telefone para contato: </strong>(11) 2045-4000
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Endereço
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>Endereço da nossa sede:</strong> Águia de Haia, 2633 - Cidade Antônio Estêvão de
                                                Carvalho, São Paulo - SP, 03694-000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            <?php } ?>
    </body>
 </html>