<?php 
	echo "Start of phpapachemods.php<br>";
	echo "Is ruby there?<br>";
	$retW = `ls /usr/local/bin/er*`;
	echo $retW;
	$retR = `/usr/local/bin/erb -v`;
	echo $retR;
	// echo "Apache version present is:<br>";
	// $retVer = apache_get_version();
	// echo "$retVer<br>";
	
	 echo "Modules present are:<br>";
	 $retMods = apache_get_modules();
	 print_r($retMods);
	echo "End of phpapachemods.php<br>";
?>

