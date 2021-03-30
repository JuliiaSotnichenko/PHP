<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Exercise 2</h2>

<form action="" method="post">
<input type="text" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="password">
    <br>
    <br>
    <input type="submit" value="Connect">
</form>
    





<?php
// Exercise 2 : 
// 2.1 :
// Write a PHP script that gives the multiplication table of 2
// Multiplication table from 1 to 10 (Already done in previous exercise)

echo "<table border=\"1\">";

for ($r =1; $r <= 10; $r++){

    echo'<tr>';

    for ($c = 1; $c <= 10; $c++)
        echo '<td>' .$c*$r.'</td>';
   echo '</tr>'; // close tr tag here

}

echo"</table>";

// 2.2 :
// 	Modify this script to give the multiplication table of any number ($x for example) in a table
// 2.3 :
// 	Create a form with one input.
// 	When you validate this form, it should display the multiplication table of the number you entered.
// 	You have to check if the value is correct (no float and no string, ONLY integer).
?>





</body>
</html>











