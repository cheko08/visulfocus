<div class="container">
	<h2>Trabaja con nosotros</h2>
	<p>Llena el siguiente formulario y nosotros nos pondremos en contacto</p>
	<?php echo form_open_multipart('trabajo/solicitud');?>
	<?php 
	if ($this->session->flashdata('result') != ''): 
		echo $this->session->flashdata('result'); 
	endif;
	?>
	
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="dir">Dirección</label>
				<input type="text" name="dir" class="form-control" id="dir" placeholder="Dirección">
			</div>
			<div class="form-group">
				<label for="telefonos">Teléfonos</label>
				<input type="tel" name="tel_casa" class="form-control" id="tel_casa" placeholder="Teléfono Casa">
				<input type="tel" name="tel_cel" class="form-control" id="tel_cel" placeholder="Teléfono Celular">
			</div>
			<div class="form-group">
				<label for="email">Correo Electrónico</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Correo Electrónico">
			</div>
		</div><!--end col-sm-6-->
		<div class="col-sm-6">
			<div class="form-group">
				<label for="ocupacion">Ocupación</label>
				<input type="text" name="ocupacion" class="form-control" id="ocupacion" placeholder="Ocupación">
			</div>
			<div class="form-group">
				<label for="nacionalidad">Nacionalidad</label>
				<input type="text" name="nacionalidad" class="form-control" id="nacionalidad" placeholder="Nacionalidad">
			</div>
			<div class="form-group">
				<label for="radica">Radica en</label>
				<input type="text" name="radica" class="form-control" id="radica" placeholder="Radica en">
			</div>
		</div><!--end col-sm-6-->
	</div><!--end row-->
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<input type="text" name="edad" class="form-control" id="edad" placeholder="Edad">
				<input type="text" name="estatura" class="form-control" id="estatura" placeholder="Estatura">
				<input type="text" name="peso" class="form-control" id="peso" placeholder="Peso">
				<input type="text" name="piel" class="form-control" id="piel" placeholder="Color de piel">
				<input type="text" name="cabello" class="form-control" id="cabello" placeholder="Color de cabello">
				<input type="text" name="ojos" class="form-control" id="ojos" placeholder="Color de ojos">
			</div>
		</div><!--end col-sm-6-->
		<div class="col-sm-6">
			
			<div class="form-group">
				<label for="medidas">Medidas</label>
				<input type="text" name="talla" class="form-control" id="talla" placeholder="Talla de ropa">
				<input type="text" name="calzado" class="form-control" id="calzado" placeholder="Talla de calzado">
				<input type="text" name="busto" class="form-control" id="busto" placeholder="Busto">
				<input type="text" name="cintura" class="form-control" id="cintura" placeholder="Cintura">
				<input type="text" name="cadera" class="form-control" id="cadera" placeholder="Cadera">
			</div>
		</div><!--end col-sm-6-->
	</div><!--end row-->
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="habilidades">Pasatiempos y habilidades</label>
				<input type="text" name="habilidades" class="form-control" id="habilidades" placeholder="Pasatatiempos y Habilidades">
			</div>
			<div class="form-group">
				<label for="tiempo">Tiempo disponible</label>
				<input type="text" name="tiempo" class="form-control" id="tiempo" placeholder="Tiempo completo, Medio Tiempo, Fines de semana, etc.">
			</div>
			<div class="form-group">
				<label for="vestuario">Tipos de vestuario que usaría</label>
				<ul class="list-group">
					<li class="list-group-item form-control"><input type="checkbox" name="vestuario" value="Vestido Coktail"> Vestido Coktail</li>
					<li class="list-group-item form-control"><input type="checkbox" name="vestuario1" value="Tops"> Tops</li>
					<li class="list-group-item form-control"><input type="checkbox" name="vestuario2" value="Shorts"> Shorts</li>
					<li class="list-group-item form-control"><input type="checkbox" name="vestuario3" value="Vestuario de licra"> Vestuario de licra</li>
				</ul>
			</div>
		</div><!--end col-sm-6-->
		<div class="col-sm-6">
			
			<div class="form-group">
				<label for="personalidad">Características personales</label>
				<input type="text" name="personalidad" class="form-control" id="personalidad" placeholder="Dinámica, Proactiva, Socibable, etc.">
			</div>
			<div class="form-group">
				<label for="eventos">Tipos de eventos en los que participaría</label>
				<input type="text" name="eventos" class="form-control" id="eventos" placeholder="Congresos, Carnaval, Pasarela, etc.">
			</div>
			<div class="form-group">
				<label for="foto">Foto de cuerpo completo</label>
				<input type="file" id="foto" name="userfile" size="20">
				<p class="help-block">Foto de cuerpo completo</p>
			</div>
			<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
		</div><!--end col-sm-6-->
	</div><!--end row-->
	<?php echo form_close();?>
</div><!--end container-->