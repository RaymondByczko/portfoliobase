<?php
//	file: websites/mylayouts.dev/s_fourth.php
//	note1: This file is a variant of fourth.php.  It shows
//	the PHP and CSS source.
//	author: Raymond Byczko
//	start date: December 2010
//	further work dates: February 5, 2011
//
//	purpose: to demonstrate layout with left and right columns,
//	header, footer, and menu item blocks in left column.
//	The challenge of this experiment was to use an online (and
//	firefox installed) tool for generating gradiants.
//	This tool is called ColorZilla and is at:
//
//	http://www.colorzilla.com/gradient-editor/
//
//	See the div id, footer_id in this file and in
//	gen_styles_mylayouts4.css .
//
//	This webpage prototypes the front end of an online protocol
//	analyzer.

	// This program will act as an ajax call for itself.
	if (!empty($_POST['retrievephpsource']))
	{
		$fc = file_get_contents('s_fourth.php');
		echo htmlspecialchars($fc);
		return;
	}
	if (!empty($_POST['retrievecss']))
	{
		$fc = file_get_contents('css/s_gen_styles_mylayouts4.css');
		echo htmlspecialchars($fc);
		return;
	}
?>
<html>
<head>
<link rel=stylesheet href=css/s_gen_styles_mylayouts4.css type=text/css>
<title>Monitor Control (source enabled)</title>
</head>
<body>
<div id=masthead_id style='position: absolute; top:0px; left: 0px; width: 872px; height: 100px'>
<div id=mcc_id style='position: absolute; top: 5px; left: 5px; width: 175px; height: 83px'></div>
<div id=trail_id style='position: absolute; top: 5px; left: 180px; width: 300px; height: 83px' ></div>

<div id=source_css_id style='position: absolute; top: 25px; left:480px; width:300px; height: 50px'>
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
		url: "s_fourth.php",
		data: "retrievephpsource=1",
		success: successFunction
	});
}


function getCSSEvent()
{
	$.ajax({
		type: "POST",
		url: "s_fourth.php",
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
<div id=reports_id class=hmenu style='position:absolute; top: 0px; left: 108px; width: 100px; height: 28px'>Reports
<div id=reportsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=devices_id class=hmenu style='position:absolute; top: 0px; left: 216px; width: 100px; height: 28px'>Devicies
<div id=devicesb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=nodes_id class=hmenu style='position:absolute; top: 0px; left: 324px; width: 100px; height: 28px'>Nodes
<div id=nodesb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=interfaces_id class=hmenu style='position:absolute; top: 0px; left: 432px; width: 100px; height: 28px'>Interfaces
<div id=interfacesb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=decode_id class=hmenu style='position:absolute; top: 0px; left: 540px; width: 100px; height: 28px'>Decode
<div id=decodeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=traffic_id class=hmenu style='position:absolute; top: 0px; left: 648px; width: 100px; height: 28px'>Traffic
<div id=trafficb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=documentation_id class=hmenu style='position:absolute; top: 0px; left: 756px; width: 100px; height: 28px'>Documentation
<div id=documentationb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
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
<!-- 
	left of left_middle_id is set to 58px because width of left_id is set 50px and
	the border of left_id is set to 4px.  So 2 times 4px plus 50px is equal to 58px.
-->
<div id=left_middle_id style='position: absolute; top: 144px; left: 58px; width: 50px; height: 196px' >
<div id=menu8_id style='position: absolute; top: 0px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu9_id style='position: absolute; top: 28px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu10_id style='position: absolute; top: 56px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu11_id style='position: absolute; top: 84px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu12_id style='position: absolute; top: 112px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu13_id style='position: absolute; top: 140px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu14_id style='position: absolute; top: 168px; left:0px; width: 42px; height: 20px' ></div>
</div>
<div id=middle_id style='position: absolute; top: 144px; left: 116px; width: 748px; height: 196px'>
<div id=menu15_id style='position: absolute; top: 0px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu16_id style='position: absolute; top: 28px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu17_id style='position: absolute; top: 56px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu18_id style='position: absolute; top: 84px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu19_id style='position: absolute; top: 112px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu20_id style='position: absolute; top: 140px; left:0px; width: 740px; height: 20px' ></div>
<div id=menu21_id style='position: absolute; top: 168px; left:0px; width: 740px; height: 20px' ></div>
</div>
<div id=footer_id style='position: absolute; top:348px; left:0px; width:872px; height: 50px'>
</div>
<div id=programtext_id style='position: absolute; top: 400px; left: 0px; width: 872px; height: 450px'> 
<textarea id=textarea_id cols=70 rows=26>
</textarea>
</div>
</body>
</html>

