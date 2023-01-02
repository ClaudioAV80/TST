<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","1234") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("registro",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$edad = $_POST['edad'];

	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($email)*strlen($edad)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO validacion VALUES('','$nombre','$email','$edad')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>