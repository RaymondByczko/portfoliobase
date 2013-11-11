<?php
// Pull in the NuSOAP code
ini_set('include_path',ini_get('include_path').':/home/lunar51/public_html/nusoap-0.7.3/lib:');
require_once('/home/lunar51/public_html/nusoap-0.7.3/lib/nusoap.php');
// require_once('nusoap.php');
// Create the server instance
$server = new nusoap_server;
// $server = new soap_server;
// Register the method to expose
$server->register('hello');
// Define the method as a PHP function
function hello($name) {
    return 'Hello, ' . $name;
}
// Use the request to (try to) invoke the service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>

