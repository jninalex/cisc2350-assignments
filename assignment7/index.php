<!DOCTYPE html>
<html>
	<head>
		<title>Jeanne Nina</title>
		<meta charset="utf-8">
	</head>
	<body>

		<!-- php part of file-->
		<?php
		//strings
		$name = "Jeanne Nina";
		$birthday = "August 13, 1997";

		$constant = "MY_NAME";
		define($constant, "Jeanne Nina")	
		?>

		<!-- intro/about me -->
		<h1>Hello!</h1>
		<h2>My name is <?php echo MY_NAME; ?></h2>

		<p>My birthday is on <?php echo $birthday; ?></p>


		<!-- using indexed arrays -->
		<h3>My Favorite Food:</h3>

		<?php 
		//indexed array of favorite food
		$favorite_food = array("French Fries", "Cotton Candy", "Strawberry Cheesecake");

		//list array elements
		echo $favorite_food[0];
		echo '<br>';
		echo $favorite_food[1];
		echo '<br>';
		echo $favorite_food[2];
		?>


		<!-- using associative arrays -->
		<h3>Classes:</h3>

		<?php
		//associative array
		$classes = array("CISC1400" => "Discrete Structures", "CISC1600" => "Computer Science I", "CISC2000" => "Computer Science II", "CISC 2200" => "Data Structures", "CISC2540" => "Intro to Video Game Design", "CISC3593" => "Computer Organization", "MATH1206" => "Calculus I", "MATH1207" => "Calculus II", "NSCI1321" => "General Chemistry I", "NSCI1501" => "General Physics I");

		//list array elements
		echo 'So far, I have taken ' . $classes['CISC1400'] . ', ' . $classes['CISC1600'] . ', '$classes['CISC2000'] . ', ' . $classes["CISC2540"] . ', ' . $classes["CISC3593"] . ', ' . $classes["MATH1206"] . ', ' . $classes["MATH1207"] . ', ' . $classes["NSCI1321"] . ', and ' . $classes["NSCI1501"] . ' to fulfull my Computer Science major.';
		?>

	</body>
</html>
