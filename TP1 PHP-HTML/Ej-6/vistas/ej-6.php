Ejercicio 6
Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
que procesa el formulario la cantidad de deportes que practica.


<html>
<head>
<title>ejercicio 6</title>
</head>
<script type="text/javascript">

/** function contar() {

var checkboxes = document.getElementsByName("deporte"); //Array que contiene los checkbox

var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados

for (var x=0; x < checkboxes.length; x++) {

if (checkboxes[x].checked) {

cont = cont + 1;

}

}

return cont ;

} */


</script>

<body>
<form method="get" action='/Ej-6/control/funcion-Ej6.php'> 

nombre: <input name= "nombre" type='text'/> <br />
apellido: <input name= "apellido" type='text'/> <br />
edad: <input name= "edad" type='number'/> <br />
direccion: <input name= "direccion" type='text'/> <br />
estudios : <br> 
1-no tiene estudio  <input name="estudio" type="radio" value="1-no tiene estudio"/> <br />
2-estudios primarios <input name="estudio" type="radio" value="2-estudios primarios" /><br />
3-estudio secundarios <input name="estudio" type="radio" value="3-estudio secundarios" /><br />

<br> 

Deprotes: 
<br> 
futbol  <input name="deporte[]" type="checkbox" value="futbol" /> <br />
basket <input name="deporte[]" type="checkbox" value="basket" /><br />
tenis <input name="deporte[]" type="checkbox" value="tenis" /><br />
voley <input name="deporte[]" type="checkbox" value="voleys" /><br />

sexo : <select name= "sexo"> 
    <option >femenino </option>
    <option >masculino</option>

        </select>
<input type='Submit'  /> <br />
</form>
</body>
</html>