<html>
	<head>
		<title>Search Results</title>
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<?php 
			//form data variable setup with validation:
			if(!empty($_REQUEST['city'])){
				$city = $_REQUEST['city'];
			} else {
				$city = NULL;
				echo '<p class="error">Please enter a city name</p>';
			}
			if(!empty($_REQUEST['date'])){
				$date = $_REQUEST['date'];
			} else {
				$date = NULL;
				echo '<p class="error">Please specify a date</p>';
			}

			if(!empty($_REQUEST['city']) && !empty($_REQUEST['date'])){
			//print out the info from above:
			echo "<p>Search results for <b>$city</b> on <b>$date</b></p>";
			}

		?>
	</body>
</html>