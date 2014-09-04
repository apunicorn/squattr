<html>
	<head>
		<title>Search Results</title>
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<?php 
				//form data variable setup with validation:
	 			$a_city;
	 			$month = $_REQUEST['month'];

				if(!empty($_REQUEST['city'])){
					$a_city = true;
					$city = $_REQUEST['city'];
				}  else {
					$a_city = false;
				}
				if (ctype_alpha(str_replace(' ', '', $city)) === false) {
					$a_city = false;
					
				} 

				if(!$a_city){
					$city = NULL;
					echo '<p class="error">Please enter a city name</p>';
				} else {
					echo "<p>Search results for <b>$city</b> on <b>$month</b></p>";
				}

				

			?>
	</body>
</html>