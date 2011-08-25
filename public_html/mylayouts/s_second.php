<?php
//	file: websites/mylayouts.dev/s_second.php
//	author: Raymond Byczko
//	start date: December 2010
//	further work dates: February 5, 2011
//	purpose: to demonstrate layout with left and right columns,
//	header, footer, and menu item blocks in left column.
//	The challenge of this experiment was to look at an attractive
//	web site such as usatoday, and then model some of the colors
//	used.  To do this, GIMP was used where a HTML 6 digit hex
//	is returned.  This is then specified as #XXXXXX .
//
//	This file is intended to provide php and css source
//	to aid in designing further web sites.  Accordingly,
//	its name is prepended with 's_'.

	// This program will act as an ajax call for itself.
	if (!empty($_POST['retrievephpsource']))
	{
		$fc = file_get_contents('s_second.php');
		echo htmlspecialchars($fc);
		return;
	}
	if (!empty($_POST['retrievecss']))
	{
		$fc = file_get_contents('css/s_gen_styles_mylayouts.css');
		echo htmlspecialchars($fc);
		return;
	}
?>
<html>
<head>
<title>Second (source)</title>
<link rel=stylesheet href=css/gen_styles_mylayouts.css type=text/css>
</head>
<body>
<div id=masthead_id style='position: absolute; top:0px; left: 0px; width: 872px; height: 100px'>
<div id=raytoday_id style='position: absolute; top: 5px; left: 5px; width: 119px; height: 83px'></div>
<div id=source_css_id style='position: absolute; top: 25px; left:135px; width:300px; height: 50px'>
<input type="button" id="get_source_text_id" value="Get PHP Source"/>
<input type="button" id="get_css_text_id" value="Get CSS"/>
</div>

<script language="JavaScript" type="text/javascript" src="jscr/jquery-1.4.4.js"></script>

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
		url: "s_second.php",
		data: "retrievephpsource=1",
		success: successFunction
	});
}


function getCSSEvent()
{
	$.ajax({
		type: "POST",
		url: "s_second.php",
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
<div id=header_id style='position: absolute; top:100px; left:0px; width:864px; height: 36px'>
<div id=home_id class=hmenu style='position:absolute; top: 0px; left: 0px; width: 100px; height: 28px'>Home
<div id=homeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=news_id class=hmenu style='position:absolute; top: 0px; left: 108px; width: 100px; height: 28px'>News
<div id=newsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=travel_id class=hmenu style='position:absolute; top: 0px; left: 216px; width: 100px; height: 28px'>Travel
<div id=travelb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=money_id class=hmenu style='position:absolute; top: 0px; left: 324px; width: 100px; height: 28px'>Money
<div id=moneyb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=sports_id class=hmenu style='position:absolute; top: 0px; left: 432px; width: 100px; height: 28px'>Sports
<div id=sportsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=life_id class=hmenu style='position:absolute; top: 0px; left: 540px; width: 100px; height: 28px'>Life
<div id=lifeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=tech_id class=hmenu style='position:absolute; top: 0px; left: 648px; width: 100px; height: 28px'>Tech
<div id=techb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=weather_id class=hmenu style='position:absolute; top: 0px; left: 756px; width: 100px; height: 28px'>Weather
<div id=weatherb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
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
<div id=left_id style='position: absolute; top:144px; left: 0px; width: 50px; height: 196px' >
<div id=menu1_id style='position: absolute; top: 0px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu2_id style='position: absolute; top: 28px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu3_id style='position: absolute; top: 56px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu4_id style='position: absolute; top: 84px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu5_id style='position: absolute; top: 112px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu6_id style='position: absolute; top: 140px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu7_id style='position: absolute; top: 168px; left:0px; width: 42px; height: 20px' ></div>
</div>
</div>
<div id=footer_id style='position: absolute; top:348px; left:0px; width:864px; height: 50px'>
</div>
<div id=programtext_id style='position: absolute; top: 406px; left: 0px; width: 600px; height: 450px'> 
<textarea id=textarea_id cols=70 rows=26>
</textarea>
</div>
</body>
</html>

