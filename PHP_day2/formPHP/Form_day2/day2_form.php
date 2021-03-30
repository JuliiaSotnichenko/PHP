<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>

<?php


  if (empty($_POST)){
    echo "<p style='color: red;'> good luck </p>";
  } else {
    echo "<p style='color: green;'> good luck </p>";
  }


    if((strpos($_POST['email'], '@')))   
        echo 'Valid email';
    else {
        echo 'Invalid email';
    }   

  
  

?>

<br>
<br>

<h2>Registration form</h2>

<form action="" method="post">
<input type="text" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <br>
    <input type="submit" value="Connect">
</form>
    








<!-- 
/* -- Exercise 1 :
	
	1.1 : 
	Create a basic connection form with email and password input.

	1.2 :
	Check if a string contains the '@' symbol thanks to the 'strpos' function.
	If yes, display 'valid email';
	If no, display 'invalid email';

	1.3 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

*/ -->


</body>
</html>