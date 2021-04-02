<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    






<?php

// Let's assume you have an online shopping website.

// 	Step 1 :
// 		Import the 'users.sql' file into PHPMYADMIN.
// 		You have to choose a DB (create a new one or use movie_db).

//     Step 2: 
// 	    Create a page 'login.php'.
// 	    Inside this page, create a form to signin into your beautiful website.

// 	    It will ask for : email, password.
// Step 3: 
// Once the user logged in, you have to open a session.
// In this session you'll have to save the username.


session_start();
echo '<br>';
echo 'Welcome';
echo '<br>';
echo '<br>';
echo '<br>';

$_SESSION['time'] = time();






?>



<form action="" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Passsword">
        <br>

        <input type="submit" name="submitBtn" value="SEND">
    </form>




</body>
</html>







