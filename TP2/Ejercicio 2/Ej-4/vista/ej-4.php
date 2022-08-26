Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
persona es mayor de edad o no; (si la edad es mayor o igual a 18).
Enviar los datos usando el método GET y luego probar de modificar los datos
directamente en la url para ver los dos posibles mensajes.



<html>
<head>
<title>ejercicio 4</title>
</head>

<body>
<form method="get" action='/Ejercicio 2/Ej-4/control/funcion-Ej4.php'> 

nombre: <input name= "nombre" type='text'/> <br />
apellido: <input name= "apellido" type='text'/> <br />
edad: <input name= "edad" type='number'/> <br />
direccion: <input name= "direccion" type='text'/> <br />
<input type='Submit' /> <br />
</form>
</body>
</html>