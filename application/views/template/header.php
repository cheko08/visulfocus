<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url("assets/img/vfico.ico"); ?>" rel="shortcut icon" />
  <title><?php echo $title; ?></title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/template.css"); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><span class="visual">Visual</span> <span class="focus">Focus</span></a>
        </div>
        <div class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><?php echo anchor('home', 'Inicio', 'title="Inicio"'); ?></li>
            <li><?php echo anchor('empresa', 'Empresa', 'title="Empresa"'); ?></li>
            <li><?php echo anchor('contacto', 'Contacto', 'title="Contacto"'); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?php echo anchor('servicios/modelos', 'Modelos', 'title="Modelos"'); ?></li>
                <li><?php echo anchor('servicios/edecanes', 'Edecanes', 'title="Edecanes"'); ?></li>
                <li><?php echo anchor('servicios/eventos', 'Eventos', 'title="Modelos"'); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bolsa de trabajo <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?php echo anchor('trabajo/cv', 'Envíanos tu CV', 'title="Envia tu CV"'); ?></li>
                <li><?php echo anchor('trabajo/trabajos', 'Posiciones Disponibles', 'title="Posiciones"'); ?></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    