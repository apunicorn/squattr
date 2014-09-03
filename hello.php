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
 			Search Unoccupied Spaces
 		</div>
 		<div id="search_form">
 			<form action="#" method="post">
	 			<input type="text" id="city" name="city" placeholder="City" />
	 			<input type="date" id="date" name="date" />
	 			<input type="submit" id="submitted" value="Go" />
	 			<!--<div id="go">Go</div>-->
 		</div>
 	</div>
 	<div id="results">
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

<!--  <?php 

 $test_string = 'BURRITO';
 $other_test = 'TIME';
 $new_word = $test_string .'+'. $other_test;

 echo "<p>$new_word</p>"; 


 ?>  -->