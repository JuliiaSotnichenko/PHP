<?php
/*
	- Exercise 1 :
		
		Write a PHP script which displays this pattern : 
			* 
			* * 
			* * * 
			* * * * 
			* * * * * 

		You have to use a loop inside another loop to do this !

	*/
// $n = 5;
// for ($i=1; $i <= $n; $i++) { 
//     echo ' * ';
//     {

    

//     for ($j=1; $j <=$i; $j--) { 
//     }
  

// // }

$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
echo '<br>';
echo '<hr>';

// foreach ($variable as $key => $value) {
//     # code...
// }

/*
	- Exercise 2 : 
		Write a PHP script which displays this pattern : 
		* 
		* * 
		* * * 
		* * * * 
		* * * * * 
		* * * * * 
		* * * * 
		* * * 
		* * 
		* 

	*/

    $n=5;
    for($i=1; $i<=$n; $i++)
    {
    for($j=1; $j<=$i; $j++)
    {
    echo ' * ';
    }
    echo '<br>';
    }
    $n=5;
    for($i=$n; $i>=1; $i--)
    {
    for($j=1; $j<=$i; $j++)
    {
    echo ' * ';
    } 
    echo '<br> ';
    }





?>