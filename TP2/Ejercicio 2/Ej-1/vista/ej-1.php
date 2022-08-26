Ejercicio 1
Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
respuesta, que permita volver a la página anterior


<html>
<head>
    
<link rel="stylesheet" href="/bootstrap-5.2.0-dist/css/bootstrap.min.css" crossorigin="anonymous">

<script src="bootstrap-5.2.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<title>Ejemplo de PHP</title>
</head>

<body>
<form method="post" action='/Ejercicio 2/Ej-1/control/vernumero.php' class="row g-3 needs-validation" novalidate> 
<div class="col-md-4">

numero :<input name= "num" type='number' required/> <br />
<div class="valid-feedback">
      validado
    </div>

    <div class="invalid-feedback">
      no validado
    </div>
</div>

<div class="col-12">
<input type='Submit' class="btn btn-primary" /> <br />
</div>
</form>



<script >

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>
</body>
</html>