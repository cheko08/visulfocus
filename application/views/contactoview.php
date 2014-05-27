<div class="jumbotron">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
			<?php 
				if ($this->session->flashdata('result') != ''): 
					echo $this->session->flashdata('result'); 
				endif;
				?>
				<h1>Contactanos</h1>

				<p>Mandanos tus comentarios y nosotros nos pondremos en contacto. </p>
				<?php echo form_open('contacto/comments');?>
				<div class="form-group">
					<label for="email">Correo Electrónico</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Correo Electrónico">
				</div>
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="empresa">Empresa</label>
					<input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa">
				</div>
				<div class="form-group">
					<label for="Comentarios">Comentarios</label>
					<textarea class="form-control" name="comments" id="comments" placeholder="Comentarios" rows="4"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Enviar</button>
				<?php echo form_close();?>
			</div>
			<div class="col-sm-4">
				<img class="img-thumbnail" src="<?php echo base_url('assets/img/contacto.jpg');?>" alt="Edecanes">
				<address>
					<strong>Visual Focus Merida</strong><br>
					Calle 32 por 17 y 19 Montecarlo<br>
					Merida Yucatan, Mexico CP 97130<br>
					<abbr title="Telefono">T:</abbr> (123) 456-7890
				</address>

				<address>
					<strong>Correo Electrónico</strong><br>
					<a href="mailto:#">contacto@visualfocusmx.com</a>
				</address>
			</div>
		</div>
	</div>
</div>
<div class="container marketing">
	<div class="row">
		<div class="col-sm-12">
			<div id="map_canvas"></div>
		</div>
	</div>	
</div>
<script>
	function initialize() {
		var position = new google.maps.LatLng(21.023073, -89.621845);
		var myOptions = {
			zoom: 18,
			center: position,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(
			document.getElementById("map_canvas"),
			myOptions);
		var image = "<?php echo base_url('assets/img/marker.png'); ?>";
		var marker = new google.maps.Marker({
			position: position,
			map: map,
			icon:image,
			title:"Oficinas Visual Focus Merida"
		});  

		var contentString = '<strong>Visual Focus Merida</strong>';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>