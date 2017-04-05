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
		echo 'So far, I have taken ' . $classes["CISC1400"] . ', ' . $classes["CISC1600"] . ', ' . $classes["CISC2000"] . ', ' . $classes["CISC2540"] . ', ' . $classes["CISC3593"] . ', ' . $classes["MATH1206"] . ', ' . $classes["MATH1207"] . ', ' . $classes["NSCI1321"] . ', and ' . $classes["NSCI1501"] . ' to fulfill my Computer Science major.';
		?>


		<!-- using arithmetic operators-->
		<h3>Credits:</h3>
		<?php
		//variables
		$earned_credits = 95;
		$total_credits = 124;
		$credits_needed = $total_credits - $earned_credits;

		echo 'I currently have ' . $earned_credits . ' credits, and the minimum amount needed to graduate is ' . $total_credits . ' credits. Thus, I still need to earn ' . $credits_needed . ' credits in order to graduate.';
		?>


		<!-- using conditional statements -->
		<h3>Class:</h3>
		<?php

		$earned_credits = 95;
		$total_credits = 124;
		$credits_needed = $total_credits - $earned_credits;

		//calculate needed credits
		$to_be_sophomore = 30 - $earned_credits;
		$to_be_junior = 60 - $earned_credits;
		$to_be_senior = 92 - $earned_credits;

		//check classification
		if ($earned_credits < 30) {
			echo "I am classified as a Freshman.";
			echo '<br>';
			echo 'I need ' . $to_be_sophomore . ' credits to become a Sophomore.';
		} elseif ($earned_credits < 60) {
			echo "I am classified as a Sophomore.";
			echo '<br>';
			echo 'I need ' . $to_be_junior . ' credits to become a Junior.';

		} elseif ($earned_credits < 92) {
			echo "I am classified as a Junior.";
			echo '<br>';
			echo 'I need ' . $to_be_senior . ' credits to become a Senior.';

		} elseif ($earned_credits >= 92) {
			echo "I am classified as a Senior.";
			echo '<br>';
			echo 'I need at least ' . $credits_needed . ' credits more to graduate.';
		}

		?>

	</body>
</html>
