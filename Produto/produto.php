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

<!-- ======= navbar ======= -->
    <div class="collapse navbar-collapse custom-navmenu " id="main-navbar">
        <div class="container py-2 py-md-5">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <ul class="custom-menu">
                        <li><a href="../index.php" class="fontmenu">home</a></li>
                        <li><a href="../about.html" class="fontmenu">sobre</a></li>
                        <li><a href="../Clientes/clientes.php" class="fontmenu">clientes</a></li>
                        <li><a href="../Produtos/produtos.php" class="fontmenu">produtos</a></li>
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
    <!-- ======= Fim navbar ======= -->
    <main id="main">
     <!-- ======= PHP produto ======= -->
        <section class="section">
            <div class="container">
                <div class="row mb-4 align-items-center">
                    <div class="col-md-6" data-aos="fade-up">
					<?php
							$id_pro = $_GET['id_pro'];
							$sql="SELECT * FROM produto WHERE id_pro=:id_pro";
							$query = $pdo->prepare($sql);
							$query->execute(array(':id_pro'=>$id_pro));	
							
							while($row = $query->fetch(PDO::FETCH_ASSOC)){
								
                        echo '<h1 class="fontlei">'.$row['nome_pro'].'</h1>';
                        echo '<p Class=fontcarac>'.$row['desc_pro'].'</p>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';

            echo '<div class="site-section pb-0">';
                echo '<div class="container">';
                    echo '<div class="row align-items-stretch">';
                        echo '<div class="col-md-8" data-aos="fade-up">';
						
                      echo '<img src="../'.$row['caminho_img_pro'].'" alt="Image" class="img-fluid">';
							
							
                        echo '</div>';
                        echo '<div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">';
                            echo '<div class="sticky-content">';
                                echo '<h2 class=""><b>caracteristicas</b></h2>';
                               

                                echo '<div class="mb-5">';
                                    echo '<p>';
                                        
                                    echo '</p>';

                                echo '</div>';

                                echo '<h2 class=" mb-3"><b>medidas</b></h2>';
                                echo '<ul class="list-unstyled list-line mb-5">';
                                    echo '<li class="fontcarac"><b>altura (com tampa):</b> '.$row['altura_pro'].' </li>';
                                    echo '<li class="fontcarac"><b>comprimento:</b> '.$row['comprimento_pro'].' cm</li>';
                                    echo '<li class="fontcarac"><b>largura:</b> '.$row['largura_pro'].' </li>';
                                    echo '<li class="fontcarac"><b>volume útil:</b> '.$row['volume_pro'].' </li>';
                                    echo '<li class="fontcarac"><b>peso médio (vazia):</b> '.$row['peso_pro'].' </li>';
                                    echo '<li class="fontcarac"><b>quantidade (por caixa):</b> '.$row['qtdCaixa_pro'].' </li>';
                                echo '</ul>';

                                echo '<p><a href="../contact.html" class="btn  bg4 btn-light d-block w-100" data-aos="fade-up" data-aos-delay="200"><b class="fontmenu">entre em contato</b></a></p>';
							}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     

                    
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