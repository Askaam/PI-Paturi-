<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Garrafas Paturi-Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyPortfolio - v4.3.0
    * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="bg3">

    <!-- =======================================================
   Navbar
    ======================================================== -->
    <div class="collapse navbar-collapse custom-navmenu " id="main-navbar">
        <div class="container py-2 py-md-5">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <ul class="custom-menu">
                        <li class="active"><a href="../index.php" class="fontmenu">home</a></li>
                        <li><a href="about.html" class="fontmenu">sobre</a></li>
                        <li><a href="Clientes/clientes.php" class="fontmenu">clientes</a></li>
                        <li><a href="Produtos/produtos.php" class="fontmenu">produtos</a></li>
                        <li><a href="contact.html" class="fontmenu">contato</a></li>
                    </ul>
                </div>


                <div class="col-md-6 d-none d-md-block">
                    <h2><b>contato</b></h2>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <h3 Class="d-block mb-1"><b>endereco</b></h3>
                            <h3>rua caicara, 29 – centro – potim-sp</h3>
                        </li>
                        <li class="mb-3">
                            <h3 class="d-block mb-1"><b>telefone</b></h3>
                            <h3>(12) 3112-1113</h3>
                        </li>
                        <li class="mb-3">
                            <h3 class="d-block mb-1"><b>email</b></h3>
                            <h3>garrafas@ceramicapaturi.com.br</h3>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-light custom-navbar bg2 ">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/logo.png" alt="logo" width="113" height="144" class="img-fluid">
            </a>


            <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </nav>

    <!-- =======================================================
   Fim Navbar
    ======================================================== -->
    <main id="main">

        <!-- ======= Produtos Principais ======= -->
        <section class="section site-portfolio ">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                        <h1>principais produtos</h1>

                    </div>
                   <!-- <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
                        <div id="filters" class="filters">
                            <a href="#" data-filter="*" class="active"><h2>todas</h2></a>
                            <a href="#" data-filter=".web"><h2>tampa rolha</h2></a>
                            <a href="#" data-filter=".design"><h2>tampa clip</h2></a>

                        </div>
                    </div>-->
                </div>
                <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                    <?php

                    $result=$pdo->query("SELECT * FROM produto ORDER BY id_pro ASC LIMIT 6");

                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    echo '';
                    echo '<div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                        ';
                        echo '<a href="produto/produto.php?id_pro='.$row['id_pro'].'" class="item-wrap fancybox">
                            ';
                            echo '<div class="work-info">
                                ';
                                echo '<h3 class="fontlei">'.$row['nome_pro'].'</h3>';
                                echo '<p Class="fontlei">'.$row['desc_pro'].'</p>';
                                echo '
                            </div>';
                            $id = $row['id_pro'];

                            $result2=$pdo->query("select * from produto where id_pro like $id");
                            while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
                            echo '<img class="img-fluid" src="'.$row2['caminho_img_pro'].'">';
                            }
                            echo '
                        </a>';
                        echo '
                    </div>';
                    }
                    ?>
                    
                </div>
                <div class="col-md-12 mt-0 form-group">
                    <a href="Produtos/produtos.php" class="btn  bg4 btn-light d-block w-100" data-aos="fade-up" data-aos-delay="200"><b class="fontmenu">veja mais</b></a>
                </div>


            </div>
        </section><!-- Fim produtos principais -->

        <!-- ======= Peças Novas ======= -->
        <section class="section pt-0" data-aos="fade-up" data-aos-delay="100">
            <div class="container text-center my-3">

                <h1 class="">novos clientes</h1>

                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="assets/img/img_1.jpg" class="img-fluid imgnovo">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
							<?php

                    $result=$pdo->query("SELECT * FROM cliente where id_cli > 1 ORDER BY id_cli");

                    while($row = $result->fetch(PDO::FETCH_ASSOC)){                    
					echo '<div class="carousel-item">';
                                echo '<div class="col-md-3">';
                                    echo '<div class="card">';
                                        echo '<div class="card-img">';
                                            echo '<img src="'.$row['caminho_img_cli'].'" class="img-fluid imgnovo">';
                                        echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                    }
                    ?>                                                                                  
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-md-12 mt-0 form-group">
                    <a href="Clientes/clientes.php" class="btn  bg4 btn-light d-block w-100" data-aos="fade-up" data-aos-delay="200"><b class="fontmenu">veja nossos clientes</b></a>
                </div>

            </div>

        </section><!-- Fim Peças Novas -->

        <!-- ======= Serviços ======= -->
        <section class="section services">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h1>nossos servicos</h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <i class="bi bi-card-checklist"></i>
                        <h2 class="mb-2">"know how" próprio</h2>
                        <p class="fontsobre">vazilhames de louca isentos de resíduos de :</p>
                        <ul class="list-unstyled list-line">

                            <li class="fontcarac">chumbo</li>
                            <li class="fontcarac">cádmio</li>
                            <li class="fontcarac">outros metais pesados</li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <i class="bi bi-cup"></i>
                        <h2 class="mb-2">frascos</h2>
                        <p class="fontsobre">sao refratários à líquidos e gases</p>
                        <ul class="list-unstyled list-line">
                            <li class="fontcarac">nao há vazamento</li>
                            <li class="fontcarac">nao há transpiração</li>
                            <li class="fontcarac">nao há evaporação</li>
                            <li class="fontcarac">aroma e sabor jamais se alteram</li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <i class="bi bi-brightness-high"></i>
                        <h2 class=" mb-2">design</h2>
                        <p class="fontsobre"> graças ao design e acabamento esmerado</p>
                        <ul class="list-unstyled list-line">
                            <li class="fontcarac">garrafas não são descartadas pelo consumidor</li>
                            <li class="fontcarac">proporcionando à sua empresa uma publicidade duradoura </li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <i class="bi bi-calendar4-week"></i>
                        <h2 class="mb-2">servico</h2>
                        <p class="fontsobre">o servico paturi se completa com :</p>
                        <ul class="list-unstyled list-line">
                            <li class="fontcarac">rótulo</li>
                            <li class="fontcarac">tampa</li>
                            <li class="fontcarac">lacre</li>
                            <li class="fontcarac">embalagem</li>

                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Fim Serviços -->

        <!-- ======= Area de contato ======= -->
        <section class="section pb-5">
            <div class="container">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12 justify-content-center text-center" data-aos="fade-up">

                        <h1 class="align-items-center">entre em contato</h1>
                        <h2 class="align-items-center">entre em contato para tirar suas dúvidas </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                            <div class="row gy-3">
                                <div class="col-md-6 form-group">
                                    <label for="name"><h3>nome</h3></label>
                                    <input type="text" name="nome" class="form-control" id="nome" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="name"><h3>email</h3></label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="name"><h3>objetivo</h3></label>
                                    <input type="text" class="form-control" name="objetivo" id="objetivo" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="name"><h3>mensagem</h3></label>
                                    <textarea class="form-control" name="mensagem" cols="30" rows="10" required></textarea>
                                </div>

                                <div class="col-md-12 my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Sua mensagem foi enviada ! Obrigado </div>
                                </div>

                                <div class="col-md-12 mt-0 form-group">
                                    <button type="submit" class="btn bg4 btn-light d-block w-100"><b class="fontmenu">enviar</b></button>
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="col-md-6 ml-auto order-2" data-aos="fade-up">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <h3 Class="d-block mb-1"><b>endereco</b></h3>
                                <h5 class="fontcont">Rua Caiçara, 29 – Centro – Potim-SP</h5>
                            </li>
                            <li class="mb-3">
                                <h3 class="d-block mb-1"><b>telefone</b></h3>
                                <h5 class="fontcont">(12) 3112-1113</h5>
                            </li>
                            <li class="mb-3">
                                <h3 class="d-block mb-1"><b>email</b></h3>
                                <h5 class="fontcont">garrafas@ceramicapaturi.com.br</h5>
                            </li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.8747127015054!2d-45.253852148831!3d-22.84412434130927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc30f76114a39%3A0x1b2dd624b83cde24!2sR.%20Cai%C3%A7ara%2C%20Potim%20-%20SP%2C%2012525-000!5e0!3m2!1spt-BR!2sbr!4v1637191410181!5m2!1spt-BR!2sbr" width="auto" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </section><!-- End Clients Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
                        -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-sm-6 social text-md-end">
                 
                    <a href="https://web.facebook.com/pages/category/Industrial-Company/Garrafas-Paturi-100114685022297/?_rdc=1&_rdr"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                  
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= fim Footer ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>