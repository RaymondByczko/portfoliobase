<?php
/*
<!--
	file copied from: websites/mylayouts.dev/first.php
	file: websites/myhtml5.dev
	author: Raymond Byczko
	start date: December 2010
	purpose: to demonstrate layout with left and right columns,
	header, footer, and menu item blocks in left column.
-->
<!--<html manifest="http://myhtml5.dev/cache-manifest.cmi" >-->
*/
?>
<?php
// header("Accept: application/xhtml+xml,application/xml");
?>
<html manifest="http://www.lunarrays.com/myhtml5/cache-manifest.cmi" >
<head>
<meta http-equiv="cache-control" content="no-cache">
<link rel=stylesheet href=css/gen_styles_mylayouts.css type=text/css>
</head>
<body>
<div id=header_id style='position: absolute; top:80px; left:80px; width:400px; height: 50px'>
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
</body>
</html>

