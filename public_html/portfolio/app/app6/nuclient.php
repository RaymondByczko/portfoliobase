<?php


// echo "<br>foo<br>";
ini_set('include_path',ini_get('include_path').':/home/lunar51/public_html/nusoap-0.7.3/lib:');
// Pull in the NuSOAP code
require_once('/home/lunar51/public_html/nusoap-0.7.3/lib/nusoap.php');
// require_once('nusoap.php');
// Create the client instance
$debug = 1;
$theU = "http://www.lunarrays.com/app6/nuserver.php";
// $client = new soapclient($theU,false);
$client = new nusoap_client($theU,false);
// $client = new SoapClient(null,array('location'=> "$theU",
//				    'uri'     => "http://test-uri/"));
/*
$err = $client->getError();
if ($err) {
	echo "<b>Constructor error for soap client: $err<br>";
}
 */
// Call the SOAP method
$result = $client->call('hello', array('name' => 'RAByczko22'));
// Display the result
print_r($result);

?> 

