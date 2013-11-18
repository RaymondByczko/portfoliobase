<?php
	$loadedExt = get_loaded_extensions();
	$includePath = get_include_path();
	echo "<br>LOADED EXTENSIONS:<br>";
	print_r($loadedExt);
	echo "<br>";
	echo "<br>INCLUDE PATH:<br>";
	echo "$includePath";
	echo "<br>";
	$all = ini_get_all();
	echo "<br>INIGETALL<br>";
	print_r($all);
	echo "<br>";
	$theOpen = ini_get('open_basedir');
	echo "<br>OPENBASEDIR:<br>";
	echo "$theOpen";
	$retSet = ini_set("open_basedir", "/home/lunar51/public_html/app12/PEAR");
	echo "<br>";
	echo "<br>retSet=$retSet<br>";


	$theOpen2 = ini_get('open_basedir');
	echo "<br>OPENBASEDIR2:<br>";
	echo "$theOpen2";
	echo "<br>";

	$pav = ini_get('php_admin_value');
	echo "<br>PAV<br>";
	echo "$pav";
	echo "<br>";


	set_include_path("/home/lunar51/public_html/app12/PEAR:$includePath") or die('Cannot set include_path');
	// set_include_path("$includePath:/home/lunar51/public_html/app12/PEAR") or die('Cannot set include_path');
	$incPath = get_include_path();
	echo "<br>incPath=$incPath<br>";
	require_once 'MDB2.php';
	$dsn = array(
		'phptype'  => 'mysql',
		'username' => 'lunar51_20131117',
		'password' => 'moon65raysNOW',
		'hostspec' => 'localhost',
		'database' => 'lunar51_dbHowTo',
	);

	$options = array(
	    'debug'       => 3,
	    'portability' => MDB2_PORTABILITY_ALL,
	);

	// uses MDB2::factory() to create the instance
	// and also attempts to connect to the host
	$mdb2 =& MDB2::connect($dsn, $options);
	if (PEAR::isError($mdb2)) {
		echo "<br>Problem connecting<br>";
		die($mdb2->getMessage());
	}
	else
	{
		echo "<br>Connection successful<br>";
	}
	$res =& $mdb2->query('SELECT TITLE FROM lunar51_tblHowTo');
	echo "<br>RESULTS OF QUERY:<br>";
	while (($row = $res->fetchRow()))
	{
		echo "<br>$row[0]<br>";
	}
	$mdb2->loadModule("Manager");
	
	$def = array (
	'id' => array (
	'type' => 'integer',
	'unsigned' => 1,
	'notnull' => 1,
	'default' => 0,
	),
	'name' => array (
	'type' => 'text',
	'length' => 255
	),
	'datetime' => array (
	'type' => 'timestamp'
	)
	);
	
	$mdb2->createTable("lunar51_foo2Tbl", $def);
	// $mdb2->manager->createDatabase('lunar51_fooDB');
	$mdb2->disconnect();
	echo "<br>end of program3<br>";
?>
