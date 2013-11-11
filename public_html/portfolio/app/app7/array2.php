<?php
// file: app7\array2.php
// author: Raymond Byczko
// date: 12-18-2008
// purpose: To test various iterator functions (current, reset, next, etc)
// from page 126 of 'Programming PHP'.
	echo "start of app7/array2.php<br>";
	$my_fish = array('bass', 'bluefish', 'mackeral', 'tuna', 'mako', 'cod');	
	echo "my_fish is:<br>";
	print_r($my_fish);
	echo "<br>";
	echo "<br>Resetting my_fish<br>";
	// Insure iterator is at first element of array
	reset($my_fish);

	// return key,value and advance iterator to next element.
	$ret_each = each($my_fish);
	while ($ret_each != FALSE)
	{
		echo "ret_each (its value): $ret_each[value]<br>";
		// return key,value and advance iterator to next element.
		$ret_each = each($my_fish);

	}

	echo "my_fish is:<br>";
	print_r($my_fish);
	echo "<br>";
	echo "<br>";
	echo "Resetting on my_fish and call next twice.  This should place<br>";
	echo "iterator on mackeral<br>";
	reset($my_fish); // Iterator is on 0th element. 
	$ret_next = next($my_fish); // Iterator is on 1st element.
	$ret_next = next($my_fish);  // Iterator is on 2nd element (mackeral)
	$ret_each = each($my_fish);  // This should return mackeral.
	echo "The value of the 2nd element (0 based) is: $ret_each[value]<br>";

	echo "<br>end of app7/array2.php<br>";
	
?>
