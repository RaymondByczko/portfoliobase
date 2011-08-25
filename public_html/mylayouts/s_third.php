<?php
//	file: websites/mylayouts.dev/s_third.php
//	Note1: s_third.php is a slight derivative of third.php.
//	It includes source (PHP, CSS) viewing functionality.
//	author: Raymond Byczko
//	start date: December 2010
//	further work dates: February 5, 2011
//	purpose: to demonstrate layout with left and right columns,
//	header, footer, and menu item blocks in left column.
//	The challenge of this experiment was to use an online (and
//	firefox installed) tool for generating gradiants.
//	This tool is called ColorZilla and is at:
//
//	http://www.colorzilla.com/gradient-editor/
//
//	See the div id, footer_id in this file and in
//	gen_styles_mylayouts2.css .

	// This program will act as an ajax call for itself.
	if (!empty($_POST['retrievephpsource']))
	{
		$fc = file_get_contents('s_third.php');
		echo htmlspecialchars($fc);
		return;
	}
	if (!empty($_POST['retrievecss']))
	{
		$fc = file_get_contents('css/s_gen_styles_mylayouts2.css');
		echo htmlspecialchars($fc);
		return;
	}
?>
<html>
<head>
<title>Third (source)</title>
<link rel=stylesheet href=css/s_gen_styles_mylayouts2.css type=text/css>
</head>
<body>
<div id=masthead_id style='position: absolute; top:0px; left: 0px; width: 872px; height: 100px'>
<div id=fishtoday_id style='position: absolute; top: 5px; left: 5px; width: 175px; height: 83px'></div>
<div id=redfish_id style='position: absolute; top: 5px; left: 180px; width: 175px; height: 83px' ></div>
<div id=fishhook_id style='position: absolute; top: 5px; left: 355px; width: 175px; height: 83px'></div>

<div id=source_css_id style='position: absolute; top: 25px; left:530px; width:300px; height: 50px'>
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
		url: "s_third.php",
		data: "retrievephpsource=1",
		success: successFunction
	});
}


function getCSSEvent()
{
	$.ajax({
		type: "POST",
		url: "s_third.php",
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
<div id=reports_id class=hmenu style='position:absolute; top: 0px; left: 108px; width: 100px; height: 28px'>Fish reports
<div id=reportsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=species_id class=hmenu style='position:absolute; top: 0px; left: 216px; width: 100px; height: 28px'>Species
<div id=speciesb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=lures_id class=hmenu style='position:absolute; top: 0px; left: 324px; width: 100px; height: 28px'>Lures
<div id=luresb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=boats_id class=hmenu style='position:absolute; top: 0px; left: 432px; width: 100px; height: 28px'>Boats
<div id=boatsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=offshore_id class=hmenu style='position:absolute; top: 0px; left: 540px; width: 100px; height: 28px'>Offshore
<div id=offshoreb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=reels_id class=hmenu style='position:absolute; top: 0px; left: 648px; width: 100px; height: 28px'>Reels
<div id=reelsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
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
<div id=footer_id style='position: absolute; top:348px; left:0px; width:844px; height: 50px'>
</div>
<div id=programtext_id style='position: absolute; top: 426px; left: 0px; width: 600px; height: 450px'> 
<textarea id=textarea_id cols=70 rows=26>
</textarea>
</div>
</body>
</html>

