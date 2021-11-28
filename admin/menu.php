<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>KZA Decorada</title>

        <!--Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
          <!-- Custom styles for this template -->
        <link href="vendor/bootstrap/css/simple-sidebar.css" rel="stylesheet">


        <?php
        include '../conexao.php';
        ?> 


        <style>
            .titulo { color: #FFFFFF !important;}
            .bloco { margin-top: 10px;}

            @media (min-width: 780px) {
                .bloco { margin-top: 150px;}
            }
        </style>

    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
					<div id="page-content-wrapper">
                	<div class="container-fluid bloco">
                    	<h1>Área do Administrador</h1>                    	
            		</div>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastro">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Cadastro" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Cadastrar</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="Cadastro">
                            <li>
	                            <a href="ambiente/formAmb.html">Cadastrar Ambiente</a>								
                            </li>
                            <li>
                            	<a href="../register/register.html">Cadastrar Cliente</a>                                
                            </li>
                            <li>
                            	<a href="categoria/formCat.html">Cadastrar Categoria</a>                                
                            </li>
                            <li>
                            	<a href="montador/formMont.html">Cadastrar Montador</a>                                
                            </li>
                            <li>
                                <a href="produto/formProd.html">Cadastrar Produto</a>
                            </li>
                            <li>
                                <a href="promo/formPromo.html">Cadastrar Promoção</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vizualizar">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Visualizar" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Visualizar</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="Visualizar">
                            <li>
                                <a href="modelo/select.php">Visualizar Ambiente</a>
                            </li>
                            <li>
                                <a href="funcionario/select.php">Visualizar Cliente</a>
                            </li>
                            <li>
                                <a href="cliente/select.php">Visualizar Categoria</a>
                            </li>
                            <li>
                                <a href="agenda/select.php">Visualizar Montador</a>
                            </li>
                            <li>
                                <a href="produto/select.php">Visualizar Produto</a>
                            </li>
                            <li>
                                <a href="servico/select.php">Visualizar Promoção</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="login.php">Sair</a>
                    </li>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>