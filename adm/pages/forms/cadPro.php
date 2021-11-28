<?php
include '../../../conexao.php';

if(!isset($_SESSION)){
	session_start();
	@$_SESSION['id_adm'];
	@$id_adm = $_SESSION['id_adm'];
	
	if($id_adm>0){
		
	}else{
		echo "<script>alert('Acesso Restrito, Apenas Administradores!');window.location=\"../../../adm\";</script>";
	}
		
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Garrafas Paturi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo mr-5" href="../../home.php"><span class="ti-home"></span></a>

              <a class="navbar-brand brand-logo-mini" href="../../home.php"><span class="ti-home"></span></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                  <span class="ti-view-list"></span>
              </button>

              <ul class="navbar-nav navbar-nav-right">


                  <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                          <i class="ti-user"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                          <a href="../../logout.php" class="dropdown-item">
                              <i class="ti-power-off text-primary"></i>
                              Logout
                          </a>
                      </div>
                  </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="ti-view-list"></span>
              </button>
          </div>
      </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../home.php">
                        <i class="ti-shield menu-icon"></i>
                        <span class="menu-title">Home</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#cad" aria-expanded="false" aria-controls="auth">
                        <i class="ti-layout-list-post menu-icon"></i>
                        <span class="menu-title">Cadastro</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="cad">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../forms/cadCli.php"> Clientes </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../forms/cadPro.php"> Produtos </a></li>

                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="ti-view-list menu-icon"></i>
                        <span class="menu-title">Tabelas</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../tables/listCli.php"> Clientes </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/listPro.php"> Produtos </a></li>

                        </ul>
                    </div>
                </li>



            </ul>
        </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Cadastro de Produto</h4>
                            <p class="card-description">
                                <!-- Basic form elements -->
                            </p>
                            <form action="../../../admin/produto/insert.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputName1">Nome do Produto:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do Produto">
                                </div>
                                
								<div class="form-group">
                                    <label for="exampleTextarea1">Descrição do Produto:</label>
                                    <input type="text" class="form-control" name="desc" id="desc" placeholder="Descrição do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Altura do Produto:</label>
                                    <input type="text" class="form-control" name="alt" id="alt" placeholder="Altura do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Comprimento do Produto:</label>
                                    <input type="text" class="form-control" name="compri" id="compri" placeholder="Comprimento do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Largura do Produto:</label>
                                    <input type="text" class="form-control" name="larg" id="larg" placeholder="Largura do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Volume do Produto:</label>
                                    <input type="text" class="form-control" name="vol" id="vol" placeholder="Volume do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Peso do Produto:</label>
                                    <input type="text" class="form-control" name="peso" id="peso" placeholder="Peso do Produto">
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputName1">Quantidade de Produto Por Caixa:</label>
                                    <input type="text" class="form-control" name="qtd" id="qtd" placeholder="Quantidade de Produto Por Caixa">
                                </div>
								
                                <div class="form-group">
                                    <label>Imagem do Produto:</label>
                                    <input type="file" name="arquivo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Enviar imagem</button>
                                        </span>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mr-2">Confirmar</button>
                                <button class="btn btn-light">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>          
              
            
                                   
                
              </div>
            </div>
          </div>
       
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
