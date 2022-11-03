<!DOCTYPE html>
<html>
<head>
	<title>Cálculo m3</title>
	<meta charset="utf-8">
	<style type="text/css"> label{display:block;margin:5px;} </style>
</head>
<body>
	<p>Número de litros</p>
	<input type="number" id="litros" name="litros" oninput="sub()">
	
	<p id="litrosmsg"></p>

	<p>Dosificación por cada m3</p>
	<input type="number" id="dosificacion" name="dosificacion" oninput="sub2()">
	<p id="dosificacionmsg"></p>

	<script>
		var litros = null;
		var litrosm3=null;
			function sub(){
			litros = document.getElementById("litros").value;
			litrosm3=litros/1000;
			litrosmsg.innerHTML= "<strong>Total: </strong> " + litrosm3 + " m3";
		}

		var dosificacion = null;
		
		function sub2(){
			dosificacion = document.getElementById("dosificacion").value;
			dosificacionmsg.innerHTML= "<strong>Se necesitan : </strong> " + dosificacion*litrosm3 + " Kg o Litros";
		}
	</script>
</body>
</html>