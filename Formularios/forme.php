<!DOCTYPE html>
<html>
<head>
	<title>4Linux - Paulo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container">

 <h2>Meu Form</h2>
 <form action="" method="POST">
  <p>
 	<label>Nome:</label>
 	<input type="text" name="nome">
  </p>
  <p>
	<label>Email:</label>
 	<input type="email" name="email">
 </p>
 <p>
 	<label>Idade:</label>
 	<input type="number" name="idade">
 </p>	
 <p>
 	<label>Sexo:</label>
 	<input type="radio" name="genero" value="M">M
 	<input type="radio" name="genero" value="F">F
 </p>
 <p>	
	<label>Data de Nasc:</label>
 	<input type="date" name="dataNasc">
</p>
<p>	
	<label>Cor:</label>
	<input type="color" name="Cor">
 </p>
 	<input type="submit" value="Enviar">
 </form>

 <?php
 		if (!empty($_POST)){
 		echo($_POST);
 	}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>