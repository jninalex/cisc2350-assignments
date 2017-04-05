<!DOCTYPE html>
<html>
	<head>
		<title>Jeanne Nina</title>
		<meta charset="utf-8">
	</head>
	<body>

		<!-- php part of file-->
		<?php

		//variables
		$name = "Jeanne Nina";
		$birthday = "August 13, 1997";
		$favorite_food1 = "French Fries";
		$favorite_food2 = "Cotton Candy";
		$favorite_food3 = "Strawberry Cheesecake";
		$class1 = "Video Game Design";
		$class2 = "Typography";
		$class3 = "Digital Photography";
		$class4 = "Info & Web Programming";
		$constant = "MY_NAME";
		define($constant, "Jeanne Nina")

		?>

		<!-- intro/about me -->
		<h1>Hello!</h1>
		<h2>My name is <?php echo MY_NAME; ?></h2>

		<p>My birthday is on <?php echo $birthday; ?></p>

		<!-- using lists -->
		<h3>My Favorite Foods:</h3>
		<ol>
			<li><?php echo $favorite_food1 ?></li>
			<li><?php echo $favorite_food2 ?></li>
			<li><?php echo $favorite_food3 ?></li>
		</ol>

		<h3>Digital Design Classes:</h3>
		<ul>
			<li><?php echo $class1 ?></li>
			<li><?php echo $class2 ?></li>
			<li><?php echo $class3 ?></li>
			<li><?php echo $class4 ?></li>
		</ul>

	</body>
</html>

