<!DOCTYPE html>
<html lang="en">
<head>
	 <title>CODDISTUDIO</title>
<link rel="stylesheet" href="css/formulariocontacto.css">
<?php require 'header.view.php' ?>
<?php require 'menu.view.php' ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Contáctanos</h1>
		</div>
	</div>
	<div class="row contenedor">
		<div class="col-sm-6">
		<div class="contenido wrap">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				Nombre
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
				Email
				<input type="text" class="form-control" id="correo" name="correo" placeholder="Email@ejemplo.com" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
				PYME
				<input type="text" class="form-control" id="pyme" name="pyme" placeholder="PYME:" value="<?php if(!$enviado && isset($pyme)) echo $pyme ?>">
				Servicio
				<input type="text" class="form-control" id="servicio" name="servicio" placeholder="Servicio:" value="<?php if(!$enviado && isset($servicio)) echo $servicio ?>">
				Comentario
				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Comentario:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

				<?php if (!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>
				<?php elseif($enviado): ?>
					<div class="alert success">
						<p>Enviado Correctamente</p>
					</div>
				<?php endif ?>

				<input type="submit" name="submit" class="btn btn-primary" value="Enviar ">


			</form>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row imgcenter">
			<div class="col-sm-3 col-sm-offset-1">
				<img src="imagenes/iconos/correo-electronico.png" title="Email" alt="E-mail" class="img-responsive center-block" />
			</div>
			<div class="col-sm-7 textContacto">
				<a href="mailto:contacto@coddistudio.com" target="_blank">contacto@coddistudio.com</a>
			</div>
		</div>
		<div class="row imgcenter">
			<div class="col-sm-3 col-sm-offset-1">
				<img src="imagenes/iconos/telefono.png" title="Email" alt="E-mail" class="img-responsive center-block" />
			</div>
			<div class="col-sm-7 textContacto">
				(868)2281520 / (868)2050148
			</div>
		</div>
		<div class="row imgcenter">
			<div class="col-sm-3 col-sm-offset-1">
				<img src="imagenes/iconos/coddistudiofacebook.png" title="Email" alt="E-mail" class="img-responsive center-block" />
			</div>
			<div class="col-sm-7 textContacto">
				<a href="https://www.facebook.com/coddistudio/" target="_blank">Facebook.com/Coddistudio</a>
			</div>
		</div>
		<div class="row imgcenter">
			<div class="col-sm-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3590.4290860985147!2d-97.54539198538968!3d25.85535148359434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866f9348f16e8b83%3A0x70635a42dc66abfb!2sUniversidad+Aut%C3%B3noma+de+Tamaulipas+25%2C+Nuevo+Milenio%2C+87347+Matamoros%2C+Tamps.!5e0!3m2!1ses-419!2smx!4v1501516119540" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
</div>

<?php require 'footer.view.php' ?>
