<?php
echo "extension_dir=$extension_dir<br>";
if (!extension_loaded('ming'))
{
	$exLoad = "fal";
	$retDL = dl('php_ming.so');
	echo "retDL=$retDL<br>";
}
else
{
	$exLoad = "tru";
}
echo "exLoad=$exLoad<br>";
exit();
$mov = new SWFMovie();
$mov->setDimension();
header('Content-type: application/x-shockwave-flash');
$mov->output();
?>
