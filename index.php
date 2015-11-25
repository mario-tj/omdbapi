<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="handlebarjs.js"></script>
</head>
<body>
	
	<div class="container">
		<hr>
	<div class="row">
		<div class="col-md-8">
			<form action="" method="POST" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">label</label>
					<input type="text" class="form-control" id="txt-buscar" placeholder="Ingresar Pelicula">
				</div>
			
				
			
				<button type="submit" class="btn btn-primary" id="btnBuscar">Buscar</button>
			</form>
		</div>
	</div>

<hr>
<div class="contenedor-api">
	
</div>
	
	</div>
	
	<?php include "template_hb.php" ?>

	<script src="api.js"></script>
</body>
</html>