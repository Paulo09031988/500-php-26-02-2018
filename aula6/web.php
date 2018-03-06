<?php

echo "<pre>";
// header('Location: http://www.4linux.com.br');

// header('Content-type: application/xml'):

print_r($_SERVER);


array_push($_ENV,['bd' => 'localhos']);
print_r($_ENV);


//print_r($_GET)


//$_POST['nome'] = 'Lucas';





//print_r($_POST);




//<form action="#" method="POST">
	//<input type="text" name="nome">
	//<input type="submit" value="ok">
//</form>


session_start();

$_session['logado'] = true;

if (!$_SESSION['logado']){
	header("Location")
}