<?php
	session_start();
	require_once "menu.php";
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style_insert.css" media="screen"/>
</head>
<script type="text/javascript">

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
				.css("display", "block");
		};
		reader.readAsDataURL(input.files[0]);
	}
}
</script>
<body>
	<!-- enctype="multipart/form-data", para indicar que enviaras archivos binarios method="GET" -->
	<form class="insertar_articulo" id="insertar_art" name="insert" action="controller.php" method="POST" enctype="multipart/form-data">
		<h2 class="contact_form">Insertar</h2>
		<div>
			<ul>
			<li> 
				<input type="text" name="nombre_articulo" id="name_art" class="inser" placeholder="Nombre del artículo"/>
			</li>
			<li> 
       			 <textarea name="comment" id="textArea" class="inser" placeholder="Alter Bridge es una banda estadounidense de hard rock y metal alternativo formada por Mark Tremonti, Brian Marshall y Scott Phillips (ex-miembros de Creed), con Myles Kennedy (ex-vocalista y guitarrista de The Mayfield Four) en el 2004.Alter Bridge lanzó su álbum debut One Day Remains el 10 de agosto del mismo año, con su primer sencillo."></textarea>
			</li>
			<li>
				<img src="#" id="blah" alt="Tú Imagen"/>
			</li>
			<li>
    			<!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
				<input type="file" id="user-img-file"  name="user-img-file" onchange="readURL(this)"/>
			</li>
			<li>
       			 <input type="submit" name="subir" id="subir_text" value="Subir Archivo" class="envia"/>
			</li>
		    </ul>
		</div>
		<div id="errorsJs"></div>
	</form>
	<!-- Permite visualizar la img a subir -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<script src="js/insertar_art.js"></script>
</body>
</html>