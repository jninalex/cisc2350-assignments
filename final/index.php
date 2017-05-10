<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal Dashboard</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">


</head>
<body>

	<!-- clock -->
	<div class ="clock">
	<?php
		date_default_timezone_set('America/New_York');
		echo date('h:i A');
		echo '<br>';
	?>
	</div>

	<div class="greeting">
	<!-- greeting -->
	<?php
	//date_default_timezone_set('America/New_York');
   
    	/* This sets the $time variable to the current hour in the 24 hour clock format */
    	$time = date("H");
   		/* Set the $timezone variable to become the current timezone */
    	$timezone = date("e");
    	/* good morning if the time is less than 12:00 hours */
    	if ($time < "12") {
        	echo "Good morning";
    	} else
    	/* good afternoon if the time is greater than or equal to 12:00 hours, but less than 17:00 hours  */
    	if ($time >= "12" && $time < "17") {
        	echo "Good afternoon";
    	} else
    	/* good evening if the time is between or equal to 17:00 and 19:00 hours  */
    	if ($time >= "17" && $time < "19") {
        	echo "Good evening";
    	} else
    	/* good night if the time is greater than or equal to 19:00 hours */
    	if ($time >= "19") {
        	echo "Good night";
    	}
    ?>
    </div>

    <div class="list" >
    <h2>Things To Do: </h2>
    <form action="index.php" method="post">
    	<input type="text" name="task" placeholder="Type a new item here.">
    	<input type="submit" value="Add" class="submit">
    </form>	
    </div>

    <?php
		$db_hostname = 'localhost'; // we are connecting to our own computers
		$db_database = 'todolist';
		$db_username = 'root'; // probably "root" for now
		$db_password = 'root'; // probably "root" for now

		// connect to the database using the MySQLi extension and create a db connection
		$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

		// if $db_conn is empty, show some errors
		if (!$db_conn) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit; // stops all other code from running - KILLS THE PROGRAM
		} else {
			echo " ";
		}

		// uncomment the line below to see the value of the POST data
		// echo '<pre>' . print_r($_POST, true) . '</pre>';

	?>

	<?php if ( !empty($_POST['task']) ): ?>
		

		<?php

			$task = $_POST['task'];
			$insert_query = "INSERT INTO thingstodo (item) VALUES (?)";
			$prepared_insert = mysqli_prepare($db_conn, $insert_query);

			mysqli_stmt_bind_param($prepared_insert, "s", $task);

			$success = mysqli_stmt_execute($prepared_insert);
			$count = mysqli_affected_rows($db_conn);

			mysqli_stmt_close($prepared_insert);
			
			// create the query string and save to a variable
			$query = "SELECT * FROM thingstodo";

			// use mysqli_query to run the query you created, and save results to variable
			$result = mysqli_query($db_conn, $query);

			// check for records in the result
			if (mysqli_num_rows($result) > 0) {
				// loop through the results with a while loop
				while ( $row = mysqli_fetch_assoc($result)) {
					echo "</br>";
					// row is an associative array, with the columns acting as the keys
					echo "<li>${row['item']} </li> ";
				}
			} else {
				echo "No results found.";
			}

		?>

	<?php endif ?>

	<!-- ?php 
		<div class="list">
			<h1 class="header"> To do. </h1>

			<ul class="items">
				<li>
					<span class="item">Edit photos</span>
					<a href="#" class="done-button">X</a> 
				</li>
				<li>
					<span class="item done">Do paper</span>
				</li>
			</ul>	

			<form class="item-add" action="add.php" method="post">
				<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
				<input type="submit" value="Add" class="submit">   
			</form>

		</div>
	? -->
</body>
</html>