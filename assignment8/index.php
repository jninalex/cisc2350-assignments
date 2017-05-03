<!DOCTYPE html>
<html lang="en">
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

		//classification
		$classification;

		//check classification
		if ($earned_credits < 30) {
			$classification = "Freshman";
			echo 'I am classified as a ' . $classification . '.';
			echo '<br>';
			echo 'I need ' . $to_be_sophomore . ' credits to become a Sophomore.';
		} elseif ($earned_credits < 60) {
			$classification = "Sophomore";
			echo 'I am classified as a ' . $classification . '.';
			echo '<br>';
			echo 'I need ' . $to_be_junior . ' credits to become a Junior.';

		} elseif ($earned_credits < 92) {
			$classification = "Junior";
			echo 'I am classified as a ' . $classification . '.';
			echo '<br>';
			echo 'I need ' . $to_be_senior . ' credits to become a Senior.';

		} elseif ($earned_credits >= 92) {
			$classification = "Senior";
			echo 'I am classified as a ' . $classification . '.';
			echo '<br>';
			echo 'I need at least ' . $credits_needed . ' credits more to graduate.';
		}

		echo "<br><br><br>";

		?>


		<!-- using functions -->
		<h3>Using Functions:</h3>
		<?php
		//student year
		function get_student_year($earned_credits){
			if ($earned_credits < 30){
				$classification = "Freshman";
			}
			elseif ($earned_credits < 60) {
				$classification = "Sophomore";
			}
			elseif ($earned_credits < 92) {
				$classification = "Junior";
			}
			else {
				$classification = "Senior";
			}
			return $classification;
		}

		//grad credits needed
		function get_grad_credits($earned_credits){
			return 124 - $earned_credits;
		}

		//next level
		function get_next_level($earned_credits){
			$classification = get_student_year($earned_credits);
			if ($classification == "Freshman") {
				$next_classification = "Sophomore";
				$next_credits = 30 - $earned_credits;
			}
			elseif ($classification == "Sophomore") {
				$next_classification = "Junior";
				$next_credits = 60 - $earned_credits;
			}
			elseif ($classification == "Junior") {
				$next_classification = "Senior";
				$next_credits = 92 - $earned_credits;
			}
			else {
				$next_classification = "Graduate";
				$next_credits = get_grad_credits($earned_credits);
			}
			return array("next_classification" => $next_classification, "next_credits" => $next_credits);
		}

		$students = array(
			'rick' => 124,
			'morty' => 24,
			'summer' => 48,
			'beth' => 75,
			'jerry' => 32,
			'bird_man' => 97
		);
		?>

		<?php
			foreach($students as $name => $earned_credits){

				$name = str_replace("_", " ", $name);
				$name = str_replace("-", " ", $name);
				$proper_name = ucwords($name);
				$credits_to_graduate = get_grad_credits($earned_credits);
				$classification_year = get_student_year($earned_credits);
				$next_level = get_next_level($earned_credits);
				$next_classification = $next_level["next_classification"];
				$next_credits = $next_level["next_credits"];

				echo "<p><b>Name:</b> $proper_name</p>";
				echo "<p><b>Credits Earned:</b> $earned_credits</p>";
				echo "<p><b>Credits Needed to Graduate:</b> $credits_to_graduate</p>";
				echo "<p><b>Current Classification:</b> $classification_year</p>";
				//echo "<p>Next Level: $next_level</p>";
				echo "<p><b>Next Classification:</b> $next_classification</p>";
				echo "<p><b>Credits Required:</b> $next_credits</p>";
				echo "<br>";
			}
		?>

	</body>
</html>
