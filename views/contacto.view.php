<!DOCTYPE html>
<html lang="en">
<head>
	 <title>CODDISTUDIO</title>
<link rel="stylesheet" href="css/formulariocontacto.css">
<?php require 'header.view.php' ?>
<?php require 'menu.view.php' ?>


	<div class="contenedor">
		<h1 class="titulo">Contáctanos</h1>

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

			Tel: 8682281520/ (868)2050148 <br/>
			E-mail: contacto@coddistudio.com
		</form>
	</div>
	</div>
<?php require 'footer.view.php' ?>
