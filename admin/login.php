<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <?php
        include '../conexao.php';
        ?> 

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="vendor/bootstrap/css/simple-sidebar.css" rel="stylesheet"> 

        <style>
            .cardbackground { background-color: #3b96b5 !important;}
            .titulo { color: #ffffff !important;}
            .bloco { margin-top: 10px;}
            @media (min-width: 780px) {
                .bloco { margin-top: 150px;}
            }
            body{
                background-color: #37657d;
            }
        </style>

    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav ">
                    <li class="sidebar-brand">
                        <a href="../index.html">
                            Página Principal
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div class="page-header titulo bloco">
                <h1><center>Login do Administrador</center></h1>
            </div>
            <!-- /#page-content-wrapper -->

            <div class="container">
                <p>
                <form name="formLogin" method="post" action="validar.php">
                    <div class="form-row">
                        <div class="col-md-6 titulo">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="login" class="form-control is-valid" id="login" required>
                        </div>
                        <div class="col-md-6 titulo">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control is-valid" id="senha" required>
                        </div>
                    </div>
                    <br>
                    <center><button class="btn btn-secondary" type="submit">Entrar</button></center>
                 
                </form>
            </div>
        </div> <!-- /#wrapper -->

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