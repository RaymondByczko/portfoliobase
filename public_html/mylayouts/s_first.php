<?php
//	file: websites/mylayouts.dev/s_first.php
//	author: Raymond Byczko
//	start date: December 2010
//	purpose: to demonstrate layout with left and right columns,
//	header, footer, and menu item blocks in left column.
//	This file is a variant of first.php, in that it includes
//	source revealing functionality.

	if (!empty($_POST['retrievephpsource']))
	{
		$fc = file_get_contents('s_first.php');
		echo htmlspecialchars($fc);
		return;
	}
	if (!empty($_POST['retrievecss']))
	{
		$fc = file_get_contents('css/gen_styles_mylayouts.css');
		echo htmlspecialchars($fc);
		return;
	}
?>
<html>
<head>
<title>First (source)</title>
<link rel=stylesheet href=css/s_gen_styles_mylayouts.css type=text/css>
<script language="JavaScript" type="text/javascript" src="jscr/jquery-1.4.4.js"></script>
</head>
<body>
<div id=source_css_id style='position: absolute; top: 0px; left:0px; width:400px; height: 80px'>
<input type="button" id="get_source_text_id" value="Get PHP Source"/>
<input type="button" id="get_css_text_id" value="Get CSS"/>
</div>
<div id=header_id style='position: absolute; top:80px; left:80px; width:400px; height: 50px'>
<script language="JavaScript" type="text/javascript" src="/jscr/jquery-1.4.4.js"></script>
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
		url: "s_first.php",
		data: "retrievephpsource=1",
		success: successFunction
	});
}


function getCSSEvent()
{
	$.ajax({
		type: "POST",
		url: "s_first.php",
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
</div>

<!-- 
	The left major column is 196 px high.  There are 7 menu items,
	which want an internal* height of 20 px each.  The CSS rule
	is saying that each menu item wants 4 px boundary.  Thus
	each menu item takes a total of 28 px each.  Now consider
	there are 7 menu items and 28px per, then the total required
	by the menu items, height wise, is 7 times 28 px, or 196px.
	This fits perfectly for the menu items within the outer left
	division.  RByczko 12-26-10
-->
<div id=left_id style='position: absolute; top:138px; left: 80px; width: 50px; height: 196px' >
<div id=menu1_id style='position: absolute; top: 0px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu2_id style='position: absolute; top: 28px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu3_id style='position: absolute; top: 56px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu4_id style='position: absolute; top: 84px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu5_id style='position: absolute; top: 112px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu6_id style='position: absolute; top: 140px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu7_id style='position: absolute; top: 168px; left:0px; width: 42px; height: 20px' ></div>
</div>
</div>
<div id=footer_id style='position: absolute; top:342px; left:80px; width:400px; height: 50px'>
</div>
<div id=programtext_id style='position: absolute; top: 400px; left: 0px; width: 600px; height: 450px'> 
<textarea id=textarea_id cols=70 rows=26>
</textarea>
</div>
</div>

</body>
</html>

