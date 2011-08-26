<?php
// author: Raymond Byczko
// date: January 21, 2011
// purpose: To experiment with the GLOBALS associative
// array.  This web page provides the abilty to reveal
// its own PHP and CSS source.
//
// In utilizing this web page, it presents a dual purpose.
// The initial purpose does not utilize the POST parameter
// for 'retrievefile'.  However, the main web page makes
// an ajax call to this same file, and then it relies
// on the POST value.
//
	if (!empty($_POST['retrievephpsource']))
	{
		$fc = file_get_contents('globalstest.php');
		echo htmlspecialchars($fc);
		return;
	}
	if (!empty($_POST['retrievecss']))
	{
		$fc = file_get_contents('css/gt_styles.css');
		echo htmlspecialchars($fc);
		return;
	}
?>
<html>
<head>
<!--
<base href="http://www.lunarrays.com/myphpmisc/">
-->
<link rel=stylesheet href=css/gt_styles.css type=text/css>
<script language="JavaScript" type="text/javascript" src="jscr/jquery-1.4.4.js"></script>
</head>
<body>
<div id=programinstruction_id style='width:500px; height: 160px; left: 0px; top: 30px'>
<?php
echo "<pre>\n";
echo "The purpose of this program is to determine if writing\n"; 
echo "to a global variable via the GLOBALS array in a function\n";
echo "is possible and will create that global variable. (The\n";
echo "answer is YES.)\n";
echo "keywords: GLOBALS, file_get_contents, htmlspecialchars, jquery\n";
echo "\n";
echo "globalstest.php: start\n";
function testTheGlobal()
{
	// Here a global variable variable is written to.
	$GLOBALS[myglobal] = 100;
}
// The global variable 'myglobal' has not been assigned to.
// Lets see what happens when we call testTheGlobal.
testTheGlobal();
echo "myglobal(1)=$GLOBALS[myglobal]\n";
$myglobal = 200;
echo "myglobal(2)=$GLOBALS[myglobal]\n";
echo "globalstest.php: end\n";
?>
</div>
<div id=button_area_id style="width: 500px; height: 100px; top: 198px; left: 0px">
<input type="button" id="get_source_text_id" value="Get PHP Source"/>
<input type="button" id="get_css_text_id" value="Get CSS"/>
<script language="JavaScript" type="text/javascript" >

// successFunction: the callback used for the PHP source and for CSS.
function successFunction(msg)
{
	$('#textarea_id').html(msg);;
};

function getSourceEvent()
{
	$.ajax({
		type: "POST",
		url: "globalstest.php",
		data: "retrievephpsource=1",
		success: successFunction
	});
}


function getCSSEvent()
{
	$.ajax({
		type: "POST",
		url: "globalstest.php",
		data: "retrievecss=1",
		success: successFunction
	});
}


window.onload = function() { 
	$('#get_source_text_id').click(getSourceEvent);
	$('#get_css_text_id').click(getCSSEvent);
}

</script>
</div>

<div id=programtext_id style="width: 500px; height: 400px; top: 306px; left: 0px">
<textarea id=textarea_id cols=63 rows=26>
</textarea>
</div>
</body>
</html>
