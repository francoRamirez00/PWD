Crear una página php que contenga un formulario HTML que permita ingresar las horas
de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
Enviar los datos del formulario por el método Get a otra página php que los reciba y
complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
se cursan por semana.

<html>
<head>
<title>ejercicio 2</title>
</head>

<body>
<form method="get" action='arrayEj2.php'> 

jueves <input name= "jueves" type='number'/> <br />
viernes <input name= "viernes" type='number'/> <br />
<input type='Submit' /> <br />

</form>
</body>
</html>