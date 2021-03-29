<?php
$charName = 'Banana Guy';
$charImg = '<img src="banana.png" width="100px">';
$characteristics = [
    'atk' => 10,
    'def' => 5,
    'health' => 10
];

echo '<h2>' . $charName . '</h2>';
echo $charImg;
echo '<br>';
echo '<br>';
echo 'Atk points : ' . $characteristics['atk'];
echo 'Def points : ' . $characteristics['def'];

/*- Exercice : 

-- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:

	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>

-- Part 2 : 

		Add a conddition, if it is below 5, display message :

        <div class="alert">
            <strong>Wait !</strong> Your charachter is too weeeakk!
        </div>
*/

if ($characteristics['atk'] > 9 && $characteristics['def'] > 9){
    echo 'Your character is ready to fight.';
} else {
    echo '<br> <strong>Wait !</strong> Your charachter is too weeeakk!';
}

/*
	- Exercise 1 :
		
		Based on the character exercise, display all his caracteristics using a loop.

	*/

    for ($characteristics = 0; $characteristics < 10; $characteristics++) {
        echo $characteristics . '<br>';
    }


/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	    Write a script that will : 
	    1. Sort by value
	    2. Sort by key in descending order
	    3. Use a loop to calculate the total of his spendings.

	*/

	$foods = [];
	$foods1 = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85");
	// $foods = [
	// 	'Salad' => 1.03,
	// 	'Tomato' => 2.3,
	// 	'Oignon' => 1.85,
	// 	'Red cabbage' => 0.85

	// ];
		ksort($foods);

		$total = 0;
		foreach ($foods1 as $value) {
			$total += $value;
		}
		echo 'Total :' . $total; 

		// $foods = array_values($foods);
		echo '<pre>';
		var_dump($foods);
		echo '</pre>';
		

		

	$totalFoods = $foods;
	// echo $totalFoods;

	// $foods = array_values($foods);
	
// 	- Exercise 3 : 

// 	Using a loop, fill in a array with every number from 0 to 20.
// 	The element 0 will therefore contain 0, the element 1 will contain 2 etc.

// 	Do it by using a for AND a while loop
//
	

// $numberArr = [
// 	'Juliia',
// 	1
// ];
$numberArr = array();

for ($i= 0; $i <=  20; $i++) {
	$numberArr[$i] = $i;
	echo "The number is: $numberArr <br>";
}
	echo '<pre>';
	var_dump($numberArr);
	echo '</pre>';
		

	$numberArr = array();
	$i = 0;
	while ($i <= 20) {
	$numberArr[$i] = $i;
	$i++;
}



/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$myArray = array();
for ($i=1; $i < 10; $i++) { 
	$myArray[$i] = $i * 2;
}

echo '<pre>';
	var_dump($myArray);
	echo '</pre>';
		

// echo "count($myArray) . '<br>";


/*
	-Exercise 5 :
		Create an array of random numbers
		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
	
		2. Find the position of the max/min also.
		You can only use 2 variables (your $array and $i doesn't count).
	*/

	$numberRan = [20, -50, 3, 168, 255, 10];
	$max = $numberRan[0];
	$min = $numberRan[0];
	$posMax = 0;
	$posMin = 0;

	for ($i = 0; $i < count($numberRan); $i++) { 
		if($numberRan[$i] > $max) {
			$max = $numberRan[$i];
			$posMax = $i;
		} 
	}

	// Check for the min
	for ($i = 0; $i < count($numberRan); $i++) { 
		if($numberRan[$i] < $min) {
			$min = $numberRan[$i];
			$posMin = $i;
		}
	}

	echo 'Maximum is : ' . $max . '<br>';
	echo 'Minimum : ' . $min . '<br>';


?>

