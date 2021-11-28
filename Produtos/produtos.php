<?php 
include '../conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Garrafas Paturi - Peças</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyPortfolio - v4.3.0
    * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="bg3">

<!-- ======= Navbar ======= -->
    <div class="collapse navbar-collapse custom-navmenu " id="main-navbar">
        <div class="container py-2 py-md-5">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <ul class="custom-menu">
                        <li><a href="../index.php" class="fontmenu">home</a></li>
                        <li><a href="../about.html" class="fontmenu">sobre</a></li>
                        <li><a href="../Clientes/clientes.php" class="fontmenu">clientes</a></li>
                        <li class="active"><a href="Produtos/produtos.php" class="fontmenu">produtos</a></li>
                        <li><a href="../contact.html" class="fontmenu">contato</a></li>
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
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/img/logo.png" alt="logo" width="113" height="144" class="img-fluid">
            </a>


            <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </nav>
    <!-- ======= Fim Navbar ======= -->
    <main id="main">

        <!-- ======= Produtos ======= -->
        <section class="section site-portfolio ">
            <div class="container">
            <!-- ======= Filtros de Pesquisa ======= -->
                <div class="row mb-5 align-items-center">
                    <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                        <h1>produtos</h1>
                        <!--<div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle d-block w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtro
                            </button>
                            <ul class="dropdown-menu bg1">
                                <li><a class="dropdown-item" href="#">6 por pagina</a></li>
                                <li><a class="dropdown-item" href="#">12 por pagina</a></li>
                                <li><a class="dropdown-item" href="#">18 por pagina</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
                        <div id="filters" class="filters">
                            <a href="#" data-filter="*" class="active"><h2>todas</h2></a>
                            <a href="#" data-filter=".web"><h2>tampa rolha</h2></a>
                            <a href="#" data-filter=".design"><h2>tampa clip</h2></a>
                            <div class="btn-group">
 
                              </div>
                        </div>-->
                    </div>
                </div> 
                <!-- ======= Fim Filtros de Pesquisa ======= -->
                <div class="teste">
                 <!-- ======= PHP Produtos ======= -->
                    <div id="portfolio-grid " class="row no-gutter " data-aos="fade-up" data-aos-delay="200">
                        <?php
				
				$result=$pdo->query("SELECT * FROM produto ORDER BY id_pro");
				
				while($row = $result->fetch(PDO::FETCH_ASSOC)){
                echo '';
                    echo '<div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">';
                        echo '<a href="../produto/produto.php?id_pro='.$row['id_pro'].'" class="item-wrap fancybox">';
                            echo '<div class="work-info">';
                                echo '<h3 Class="fontlei">'.$row['nome_pro'].'</h3>';
                                 echo '<p Class="fontlei">'.$row['desc_pro'].'</p>';
                            echo '</div>';
							$id = $row['id_pro'];
										
							$result2=$pdo->query("select * from produto where id_pro like $id");
							while($row2 = $result2->fetch(PDO::FETCH_ASSOC)){
                            echo '<img class="img-fluid" src="../'.$row2['caminho_img_pro'].'">';
							}
                        echo '</a>';
                    echo '</div>';
				}
					?>
                    <!-- ======= Fim PHP Produtos ======= -->
						
                    </div>

                </div>
            </div>



        </section><!-- End  Works Section -->


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
                    
                    <a href="#"><span class="bi bi-facebook"></span></a>
                    <a href="#"><span class="bi bi-instagram"></span></a>
                    
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>