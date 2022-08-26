Ejercicio 7
Crear una página con un formulario que contenga dos input de tipo text y un select. En
los inputs se ingresarán números y el select debe dar la opción de una operación
matemática que podrá resolverse usando los números ingresados. En la página que
procesa la información se debe mostrar por pantalla la operación seleccionada, cada
uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
formulario:

<html>
<head>
<title>ejercicio 7</title>
</head>

<body>
<form method="get" action='/Ej-7/control/funcion-Ej7.php'> 

<input name= "num1" type='text'/> <br />
<input name= "num2" type='text'/> <br />

<select name= "operacion"> 
    <option >suma </option>
    <option >resta</option>
    <option >multiplicacion</option>

        </select>

<input type='Submit'  /> <br />
</form>
</body>
</html>