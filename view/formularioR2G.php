<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulario - Raiz de 2°grau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

  <div class="container">
   <h1>RAIZ DE 2° GRAU</h1>

   <form  method="get" action="../controller/controller.php">Operação<br>

    <select name="funcao">
        <option value= "raizes2grau">Raiz de 2° grau</option> 	  
    </select>

    <br>Primeiro valor<br>
    <input type="input" name="n1" value="">

    <br>Segundo valor<br>
    <input type="input" name="n2" value="">

    <br>Terceiro valor<br>
    <input type="input" name="n3" value="">

    <br><br>
    <input type="submit" value="Calcular" > 
     
   </form>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html >