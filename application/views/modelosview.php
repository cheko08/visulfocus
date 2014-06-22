<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<h2>Modelos - Edecanes</h2>
				<ul>
					<li>Modelos para pasarela</li>
					<li>Modelos para sesión fotográfica</li>
					<li>Modelos para Videograbaciones</li>
					<li>Edecanes</li>
					<li>Gios</li>
					<li>Conducción</li>
					<li>Promoedecanes ( demostradoras-degustadoras)</li>
					<li>Promotores </li>
					<li>Coordinación de personal</li>
				</ul>
		</div>
		<div class="col-sm-8">
			 <!--carousel -->
         <div id="carousel" class="carousel slide vertical" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
             <?php echo img('assets/img/carousel1.jpg'); ?>
             
           </div>
           <div class="item">
             <?php echo img('assets/img/modelos1.jpg'); ?>

           </div>
           <div class="item">
             <?php echo img('assets/img/modelos2.jpg'); ?>

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

  <div class="container">
  <?php
   foreach ($modelos as $row)
   {
      echo'<div class="col-sm-3">
      <a href="'.base_url("servicios/modelo/".$row->id."").'">
    <img class="img-thumbnail modelos" src="'.base_url("assets/img/modelos/".$row->img."1.jpg").'" alt="modelos">
    </a>
    <p class="name">'.$row->name.'</p>
      </div>';
   }

  ?>

    <!-- <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/angie1.jpg');?>" alt="modelos">
    <p class="name">Angie</p>
      </div>
       <div class="col-sm-3">
     <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/ana1.jpg');?>" alt="modelos">
    <p class="name">Ana</p>
      </div>
       <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/allison1.jpg');?>" alt="modelos">
    <p class="name">Allison</p>
      </div>
       <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/mariana1.jpg');?>" alt="modelos">
    <p class="name">Mariana</p>
      </div> -->


  </div>
<!-- <div class="row">
  <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/angie1.jpg');?>" alt="modelos">
    <p class="name">Angie</p>
  </div>
   <div class="col-sm-3">
     <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/ana1.jpg');?>" alt="modelos">
    <p class="name">Ana</p>
  </div>
   <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/allison1.jpg');?>" alt="modelos">
    <p class="name">Allison</p>
  </div>
   <div class="col-sm-3">
    <img class="img-thumbnail modelos" src="<?php echo base_url('assets/img/modelos/mariana1.jpg');?>" alt="modelos">
    <p class="name">Mariana</p>
  </div>
</div> -->

</div>