<!DOCTYPE html>
<html lang ="en">


<head  charset="UTF-8">
    
    <tilte>Ejercicio 1</tilte>
    </head>

<form action ="Desarrollo_01">
    cantidad de dias :<br>
    <form action="Desarrollo_01.php" method="POST">
		 Cantidad de Dias:<br>
  		<input type="text" name="dias" id="dias" value="0">
  		<input type="submit" value="Enviar">
	</form>
	<?php if(!empty($_GET['velocidad'])){
		echo  "La cantidad del recorrido es:".$_GET['velocidad'];		
	} ?>

</body>
    


</html>