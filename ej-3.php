Crear una página php que contenga un formulario HTML como el que se indica en la
imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
Cambiar el método Post por Get y analizar las diferencias



<html>
<head>
<title>ejercicio 3</title>
</head>

<body>
<form method="post" action='funcion-ej3.php'> 

nombre: <input name= "nombre" type='text'/> <br />
apellido: <input name= "apellido" type='text'/> <br />
edad: <input name= "edad" type='number'/> <br />
direccion: <input name= "direccion" type='text'/> <br />
<input type='Submit' /> <br />

</form>
</body>
</html>