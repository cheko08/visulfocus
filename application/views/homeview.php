   <div class="container-fluid">

     <div class="row">
       <div class="col-sm-12">
         <!--carousel -->
         <div id="carousel" class="carousel slide vertical" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
           <?php echo img('assets/img/carousel1.jpg'); ?>
            </div>
            <div class="item">
               <?php echo img('assets/img/carousel2.jpg'); ?>
            </div>
            <div class="item">
               <?php echo img('assets/img/carousel3.jpg'); ?>
            </div>
          </div>

          <!-- Controls -->
          <a class="carousel-control left" href="#carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
        </div><!--end carousel -->
      </div>
    </div>
  </div><!--end container -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 intro">
        <div class="jumbotron">
          <img class="img-thumbnail" src="<?php echo base_url('assets/img/diseno.jpg');?>" alt="diseno">
          <h1>Diseño</h1>
          <p class="lead">onec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
      <div class="col-sm-6 intro">
        <div class="jumbotron">
        <img class="img-thumbnail" src="<?php echo base_url('assets/img/logistica.jpg');?>" alt="diseno">
          <h1>Logística</h1>
          <p class="lead">onec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        </div>
      </div>
    </div><!--end row -->
  </div><!--end container -->
  <div class="container marketing">
    <div class="row">
      <div class="col-sm-4">
      <a href="<?php echo base_url('servicios/modelos');?>">
        <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing1.jpg');?>" alt="Modelos">
        </a>
        <h2>Modelos</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-primary" href="<?php echo base_url('servicios/modelos'); ?>" role="button">Ver Mas &raquo;</a></p>
      </div>
      <div class="col-sm-4">
       <a href="<?php echo base_url('servicios/edecanes');?>">
        <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing2.jpg');?>" alt="Edecanes">
        </a>
        <h2>Edecanes</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-primary" href="<?php echo base_url('servicios/edecanes'); ?>" role="button">Ver Mas &raquo;</a></p>
      </div>
      <div class="col-sm-4">
       <a href="<?php echo base_url('servicios/eventos');?>">
        <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing3.jpg');?>" alt="Eventos">
        </a>
        <h2>Eventos</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-primary" href="<?php echo base_url('servicios/eventos'); ?>" role="button">Ver Mas &raquo;</a></p>
      </div>
    </div><!--end row -->
  </div><!--end container marketing -->
 