<?php
// file: app7\array1.php
// author: Raymond Byczko
// date: 12-16-2008
// purpose: To test various iterator functions (current, reset, next, etc)
// from page 126 of 'Programming PHP'.
	echo "start of app7/array1.php<br>";
	$removed = array(); // an empty array I presume
	$my_fish = array('bass', 'bluefish', 'mackeral', 'tuna');	
	echo "my_fish is:<br>";
	print_r($my_fish);
	echo "<br>";
	foreach ($my_fish as $value)
	{
		echo "Processing $value<br>";
		// Remove the tuna element of the array
		if ($value == 'bass')
		{
			$removed = array_splice($my_fish, 3, 1);
			echo "Removed this: $removed<br>";
		}
	}
	echo "after end of foreach loop<br>";
	echo "my_fish array is:<br>";
	print_r($my_fish);
	echo "<br>removed arrray is:<br>";
	print_r($removed);
	echo "<br>end of app7/array1.php<br>";
	
?>
