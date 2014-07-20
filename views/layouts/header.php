<?php 
  define('BASEURL','http://localhost:8080/ExamenFinal');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
				<!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
	<link href="../css/micss.css" rel="stylesheet">	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Clase programación web verano</title>
				
			<!-- Fancybox -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" />

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Programación Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
			<!-- <li><a href="<?php echo BASEURL; ?>/views/site/inicio.php">Inicio</a></li>-->
			<!-- <li><a href="<?php echo BASEURL; ?>/views/pais/pais.php">Pais</a></li>-->
			<!-- <li><a href="<?php echo BASEURL; ?>/views/equipo/equipo.php">Equipo</a></li>-->
			<!-- <li><a href="<?php echo BASEURL; ?>/views/integrante/integrante.php">Integrante</a></li>-->
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">opciones...  <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo BASEURL; ?>/views/pais/pais.php">Pais</a></li>
						<li class="divider"></li>
					<li><a href="<?php echo BASEURL; ?>/views/equipo/equipo.php">Equipo</a></li>
						<li class="divider"></li>
					<li><a href="<?php echo BASEURL; ?>/views/integrante/integrante.php">Integrante</a></li>
					 </ul>
				</li>
		  </ul>
			
          <ul class="nav navbar-nav navbar-right">
			<?php if(!isset($_SESSION['user'])){?>
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
			<?php }else {?>
			<li><a href="<?php echo BASEURL; ?>/views/site/logout.php">
              <span class="glyphicon glyphicon-log-in"></span> Logout</a>
            </li>
			<?php } ?>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container theme-showcase" role="main">
