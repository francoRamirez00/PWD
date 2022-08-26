Ejercicio 5
Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
“radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
un mensaje que indique el tipo de estudios que posee y su sexo.




<html>
<head>
<title>ejercicio 5</title>
</head>

<body>
<form method="get" action='/Ejercicio 2/Ej-5/control/funcion-Ej5.php'> 

nombre: <input name= "nombre" type='text'/> <br />
apellido: <input name= "apellido" type='text'/> <br />
edad: <input name= "edad" type='number'/> <br />
direccion: <input name= "direccion" type='text'/> <br />
estudios : <br> 
1-no tiene estudio  <input name="estudio" type="radio" value="1-no tiene estudio"/> <br />
2-estudios primarios <input name="estudio" type="radio" value="2-estudios primarios" /><br />
3-estudio secundarios <input name="estudio" type="radio" value="3-estudio secundarios" /><br />

sexo : <select name= "sexo"> 
    <option >femenino </option>
    <option >masculino</option>

        </select>
<input type='Submit' /> <br />
</form>
</body>
</html>