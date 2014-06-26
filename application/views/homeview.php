   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-12">
         <!--carousel -->
         <div id="carousel" class="carousel slide vertical home" data-ride="carousel">

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
    </div><!--end col-sm-12 -->
  </div><!--end row -->
</div><!--end container -->
<div class="container marketing">
  <div class="row">
    <div class="col-sm-4">
     <a href="<?php echo base_url('servicios/marketing');?>">
      <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing1.jpg');?>" alt="Performance">
    </a>

    <h2>Marketing Empresarial</h2>

    <p>Diseñamos e Implementamos diversas estrategias innovadoras que contribuyan
     a involucrar a los consumidores con un determinado producto o servicio, con el
     objetivo de optimizar las ventas de nuestros clientes</p>
     <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/marketing');?>" role="button">Ver Mas</a></p>
 
   </div>   
   <div class="col-sm-4">
<a href="<?php echo base_url('servicios/modelos');?>">
    <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing3.jpg');?>" alt="Eventos">
  </a>
  <h2>Modelos y Edecanes</h2>
  <p>Ofrecemos una Excelente imagen, actitud y profesionalismo para transmitir el prestigio y calidad
   de la marca de nuestros clientes a través de nuestro personal Capacitado.</p>
   <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/modelos');?>" role="button">Ver Mas</a></p>

  </div>
  <div class="col-sm-4">
<a href="<?php echo base_url('servicios/eventos');?>">
    <img class="img-thumbnail" src="<?php echo base_url('assets/img/marketing2.jpg');?>" alt="Edecanes">
  </a>
  <h2>Eventos y Logística</h2>
  <p>Planeación, coordinación y supervisión de eventos empresariales
    Diseño-Estructura-Contenido-Conclusión del evento.</p>
    <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/eventos');?>" role="button">Ver Mas</a></p>

</div>
</div><!--end row -->
<div class="row">
  <div class="col-sm-4">

   <a href="<?php echo base_url('servicios/animacion');?>">
    <img class="img-thumbnail" src="<?php echo base_url('assets/img/performance.jpg');?>" alt="Performance">
  </a>

  <h2>Animación-Performances</h2>

  <p>Proporcionamos un equipo de trabajo especializado y con habilidades particulares
   que puedan impulsar su marca de una manera creativa.</p>
   <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/animacion');?>" role="button">Ver Mas</a></p>

 </div>     
 <div class="col-sm-4">
   

<a href="<?php echo base_url('servicios/audio');?>">
    <img class="img-thumbnail" src="<?php echo base_url('assets/img/audio.jpg');?>" alt="Eventos">
  </a>
  <h2>Mobiliaria-Audio-Video</h2>
  <p>Contamos con una amplia variedad para hacer que los eventos de nuestros clientes  se convierta en algo especial y único.</p>
  <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/audio');?>" role="button">Ver Mas</a></p>

  </div>
  <div class="col-sm-4">

 <a href="<?php echo base_url('servicios/diseno');?>">
      <img class="img-thumbnail" src="<?php echo base_url('assets/img/diseno.jpg');?>" alt="Edecanes">
    </a>
    <h2>Diseño</h2>
    <p>Nos enfocamos  en que la imagen empresarial de nuestros clientes  siempre esté presente en la mente de los consumidores con una proyección vanguardista,  adaptándola a  las exigencias y cambios actuales del mercado.</p>
    <p><a class="btn btn-sm btn-primary" href="<?php echo base_url('servicios/diseno');?>" role="button">Ver Mas</a></p>

 </div>
</div><!--end row -->


</div><!--end container marketing -->
