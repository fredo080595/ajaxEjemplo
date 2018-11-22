<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>

	<form id="frmajax" method="POST">
			
			<label>nombre</label>
			<br>
			<input type="text" name="nombre">
			<br>
			<label>apellido</label>
			<br>
			<input type="text" name="ape">
			<br>
			<label>edad</label>
			<br>
			<input type="text" name="edad">
			<br>
			<button  type="submit">enviar</button>

	</form>

<script type="text/javascript">

		$("#frmajax").on("submit",function(e){
			e.preventDefault();

			var formuario = $(this);
			var dataSelirialize = formuario.serialize();

			$.ajax({
				type: 'POST',
				url: 'ajax/enviar.php',
				data: dataSelirialize,
				success: function(r){

					if (r!=0) {
						console.log('Agregado con exito');
					}else {
						console.log('error en la peticion');
					}

				}



			});
			

		});


</script>


</body>
</html>
