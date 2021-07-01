<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title> Painel F5 Soluções Web</title>
	<link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  	
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_padrao.css"> 	
		<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_padrao.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_painel.css"> 	
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_topo.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_menulateral.css"> 	
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_pages.css">	
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/stl_footer.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/toastr.min.css">
		<script src="<?php echo BASE_URL;?>assets/bootstrap/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL;?>assets/bootstrap/bootstrap.bundle.min.js" type="text/javascript" charset="utf-8"></script> 	
		<script src="<?php echo BASE_URL;?>assets/js/init_controleTela.js" type="text/javascript"></script>
		<script src="<?php echo BASE_URL;?>assets/js/jquery.mask.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo BASE_URL;?>assets/js/toastr.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo BASE_URL;?>assets/js/int_mensagems.js" type="text/javascript" charset="utf-8"></script>
		<script src="<?php echo BASE_URL;?>assets/js/int_uploads.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo BASE_URL;?>assets/js/buscarCep/init_buscarCep.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" charset="utf-8"> 
			let BASE_URL = '<?php echo BASE_URL; ?>';
		</script>
</head>
<body>





<?php #include_once("models/editarN2BL.php");?>
<div class="container-fluid p-0 m-0">

    <div class="row p-0 m-0">
        <div class="col-sm-12 p-0 m-0">
            <?php  include ("header.php"); ?>
        </div><!-- fechando coluna valor 12 -->
    </div><!-- Fechando linha -->

    <div class="row p-0 m-0">
        <div class="col-sm-2 p-0 m-0">
            <?php
            include ("menuLateral.php");
            ?>
        </div><!-- Fechando div coluna valor 2 -->

        <div class="col-sm-10">
            <?php
            /** @var TYPE_NAME $viewName */
            /** @var TYPE_NAME $viewData */
            $this->loadViewInTemplate($viewName, $viewData);
            ?>
        </div><!-- Fechando div coluna valor 10 -->
    </div><!-- fechando linha -->
</div>

</body>
</html>


