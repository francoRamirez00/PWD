Ejercicio 1
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior


<html>
<head>
<title>Ejemplo de PHP</title>
</head>

<body>
<form method="post" action='vernumero.php'> 

numero :<input name= "num" type='number'/> <br />
<input type='Submit' /> <br />

</form>
</body>
</html>