<html>
 <head>
  <title>SQUATTR</title>
  <link rel="stylesheet" type="text/css" href="squattr.css">
  <script src="jquery-2.1.0.js"></script>
  <script src="squattr.js"></script>
 </head>
 <body>
 	<div id="colorful">
 	</div>
 	<div id="logo">
 		SQUATTR
 	</div>
 	<div id="explanation">
 		<div id="big_text">
 			Be  Free
 		</div>
 		<div id="small_text">
 			Find the perfect squat space for your needs.
 		</div>
 		<div id="search">
 			<div id="search_now">Search Now</div>
 		</div>
 	</div>
 	<div id="search_box">
 		<div id="close_search">
 			x
 		</div>
 		<div id="search_title">
 			Search Currently Vacant Spaces
 		</div>
 		<div id="search_form">
 			<form action="" method="post">
	 			<input type="text" id="city" name="city" placeholder="City" />
	 			<!--<input type="date" id="date" name="date" />-->
	 			<!-- <select name="month">
	 				<option value="January">January</option>
	 				<option value="February">February</option>
	 				<option value="March">March</option>
	 				<option value="April">April</option>
	 				<option value="May">May</option>
	 				<option value="June">June</option>
	 				<option value="July">July</option>
	 				<option value="August">August</option>
	 				<option value="September">September</option>
	 				<option value="November">November</option>
	 				<option value="December">December</option>
	 			</select>
	 			<select name="year">
	 				<option value="2014">2014</option>
	 				<option value="2015">2015</option>
	 			</select> -->
	 			<input type="submit" name="submit" id="submitted" value="Go" />
	 			<!--<div id="go">Go</div>-->
 		</div>
 	</div>
 		<?php
 			$username = "root";
	 		$password = "p1ramidkiN";
	 		$hostname = "localhost";
	 		$dbname = "squats"; 

				//connection to the database
	 		$database = mysql_connect($hostname, $username, $password) 
	 		or die("Unable to connect to MySQL");
	 		echo 'Connected to MySQL';

	 		//select the database to work with
			$selected = mysql_select_db($dbname, $database) 
			  or die("This database don't exist");
 		?>
 	<div id="results">
 		<?php 

		//execute the SQL query and return records
		// $result = mysql_query("SELECT type, name, city FROM listing")
		// or die("Nope!");
		// //fetch tha data from the database
		// while ($row = mysql_fetch_array($result)) {
		//    echo "Type: ".$row{'type'}." Name: ".$row{'name'}." City: ".$row{'city'}."<br>";
		// }


		if(!empty($_REQUEST['city'])){
	 		$city = trim($_REQUEST['city']);
	 		//search MYSQL
	 		$query = "SELECT * FROM listing WHERE city LIKE '$city'";
	 		$results = mysql_query($query) or die("Error getting query");
	 		if($row = mysql_num_rows($results)){
		 		//grabbing the results from the mysql table:
		 		//$row = mysql_fetch_array($results) or die("No results for $city");
		 		//echo $row['name']; 
		 		echo '<div class="results_title">Search results for <b>'.$city.'</b></div>';
		 		//check if there is a record for this search query and spit out the info


		 		while($row = mysql_fetch_array($results)){
		 			echo "<br />";
		 			echo "<p>".$row['name']. "-" .$row['description']."</p>";
		 		}
		 	} else {
		 		echo '<div class="results_title">No results for <b>'.$city.'</b></div>';
		 	}
 		} else {
 			echo '<p class="error">Please enter a city name</p>';
 			exit();
 		}

 		//close the database connection
		mysql_close($database);

		//form data variable setup with validation:
 		// $a_city;
	 	// // $month = $_REQUEST['month'];
	 	// // $year = $_REQUEST['year'];

 		// if(!empty($_REQUEST['city'])){
 		// 	$a_city = true;
 		// 	$city = $_REQUEST['city'];
 		// }  else {
 		// 	$a_city = false;
 		// }
 		// if (ctype_alpha(str_replace(' ', '', $city)) === false) {
 		// 	$a_city = false;

 		// } 

 		// if(!$a_city){
 		// 	$city = NULL;
 		// 	echo '<p class="error">Please enter a city name</p>';
 		// } else {
 		// 	echo "<p>Search results for <b>$city</b></p>";
 		// }



 		?>
 	</body>
</html>

