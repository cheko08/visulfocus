<div class="container">
<p><a href="<?php echo base_url('servicios/modelos');?>"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></p>	
 <?php
foreach ($modelo as $row) {
	echo '<h2>'.$row->name.'</h2>';

	for ($i=1; $i <=$row->fotos; $i++) { 
		echo '<img class="img-responsive modelo" src="'.base_url("assets/img/modelos/".$row->img.$i.".jpg").'" alt="modelos">';
		
	}
}

  ?>

	
</div>