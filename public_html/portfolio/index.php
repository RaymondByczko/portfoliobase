<!--
	file: websites/portfolio.dev/index.php
	author: Raymond Byczko
	start date: January 2011
	further work dates: February 2, 2011 - made JavaScript enhancement
		to allow easy movement of code from development to published
		state.
	November 11, 2013 - added app18a.
	November 11, 2013 - added app9.
	November 11, 2013 - added app8.
	November 11, 2013 - added app7.
	November 11, 2013 - added app6.
	November 17, 2013 - added app5.
	purpose: to provide a front end for my portfolio.

	Note1: make sure to adjust the settings in the *Home javascript
	functions to insure this code is properly set with regard to 
	its Home (i.e. development or published).
	change history: self-RByczko, 2013-06-09 June 9, Added code for toolboxhtml5.


-->
<html>
<head>
<!--<base href="http://www.lunarrays.com/portfolio/">-->
<link rel=stylesheet href=css/gen_styles_portfolio.css type=text/css>
<script language="JavaScript" type="text/javascript" src='jscr/jquery-1.4.4.js'></script>
<script language="JavaScript" type="text/javascript" >
// getmylayoutsHome: modify this function depending on whether development
// is occuring or it has been published.
function getmylayoutsHome()
{
	// The development setting.
	// return "http://mylayouts.dev/";
	// The published setting.
	return "http://www.lunarrays.com/mylayouts/";
};
// getmyphpmiscHome: modify this function depending on whether development
// is occuring or it has been published.
function getmyphpmiscHome()
{
	// The development setting.
	// return "http://myphpmisc.dev/";
	// The published setting.
	return "http://www.lunarrays.com/myphpmisc/";
};

function getmyhtml5Home()
{
	// The development setting.
	// return "http://myhtml5.dev/";
	// The published setting.
	return "http://www.lunarrays.com/myhtml5/";
};
function gettoolboxhtml5Home()
{
	// The development setting.
	// return "http://toolboxhtml5.dev/";
	// The published setting.
	return "http://toolboxhtml5.lunarrays.com/";
};
</script>
<title>rayPortfolio</title>
</head>
<body>
<div id=masthead_id style='position: absolute; top:0px; left: 0px; width: 872px; height: 100px'>
<div id=rp_id style='position: absolute; top: 5px; left: 5px; width: 175px; height: 83px'></div>
<div id=trail_id style='position: absolute; top: 5px; left: 180px; width: 300px; height: 83px' ></div>
</div>
<div id=header_id style='position: absolute; top:100px; left:0px; width:864px; height: 36px'>
<div id=home_id class=hmenu style='position:absolute; top: 0px; left: 0px; width: 100px; height: 28px'>Home
<div id=homeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=layouts_id class=hmenu style='position:absolute; top: 0px; left: 108px; width: 100px; height: 28px'>Layouts
<div id=layoutsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=clips_id class=hmenu style='position:absolute; top: 0px; left: 216px; width: 100px; height: 28px'>Clips
<div id=clipsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=phpmisc_id class=hmenu style='position:absolute; top: 0px; left: 324px; width: 100px; height: 28px'>PHP Misc
<div id=phpmiscb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=whatsnew_id class=hmenu style='position:absolute; top: 0px; left: 432px; width: 100px; height: 28px'>Whats New
<div id=whatsnewb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=googleapps_id class=hmenu style='position:absolute; top: 0px; left: 540px; width: 100px; height: 28px'>GoogleApps
<div id=googleappsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=share_id class=hmenu style='position:absolute; top: 0px; left: 648px; width: 100px; height: 28px'>Share
<div id=shareb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
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
<div id=left_a_id class="sidebuttons" style='position: absolute; top:144px; left: 0px; width: 88px; height: 300px' >
<div id=menu1_id style='position: absolute; top: 0px; left:0px; width: 80px; height: 20px' >app17b</div>
<div id=menu2_id style='position: absolute; top: 28px; left:0px; width: 80px; height: 20px' >MyMooTools18</div>
<div id=menu3_id style='position: absolute; top: 56px; left:0px; width: 80px; height: 20px' >MyMooTools19</div>
<div id=menu4_id style='position: absolute; top: 84px; left:0px; width: 80px; height: 20px' >style03</div>
<div id=menu5_id style='position: absolute; top: 112px; left:0px; width: 80px; height: 20px' >style01</div>
<div id=menu6_id style='position: absolute; top: 140px; left:0px; width: 80px; height: 20px' >style02</div>
<div id=menu7_id style='position: absolute; top: 168px; left:0px; width: 80px; height: 20px' >array1</div>
<div id=menu8_id style='position: absolute; top: 196px; left:0px; width: 80px; height: 20px' >array2</div>
<div id=menu9_id style='position: absolute; top: 224px; left:0px; width: 80px; height: 20px' >nuclient</div>
<div id=menu10_id style='position: absolute; top: 252px; left:0px; width: 80px; height: 20px' >nuserver</div>

</div>


<div id=left_b_id class="sidebuttons" style='position: absolute; top:144px; left: 96px; width: 88px; height: 300px' >
<div id=menu11_id style='position: absolute; top: 0px; left:0px; width: 80px; height: 20px' >phpinfopwd</div>
<div id=menu12_id style='position: absolute; top: 28px; left:0px; width: 80px; height: 20px' >ming1</div>
<div id=menu13_id style='position: absolute; top: 56px; left:0px; width: 80px; height: 20px' >vac13</div>
<div id=menu14_id style='position: absolute; top: 84px; left:0px; width: 80px; height: 20px' >vac14</div>
<div id=menu15_id style='position: absolute; top: 112px; left:0px; width: 80px; height: 20px' >vac15</div>
<div id=menu16_id style='position: absolute; top: 140px; left:0px; width: 80px; height: 20px' >vac16</div>
<div id=menu17_id style='position: absolute; top: 168px; left:0px; width: 80px; height: 20px' >vac17</div>
<div id=menu18_id style='position: absolute; top: 196px; left:0px; width: 80px; height: 20px' >vac18</div>
<div id=menu19_id style='position: absolute; top: 224px; left:0px; width: 80px; height: 20px' >vac19</div>
<div id=menu20_id style='position: absolute; top: 252px; left:0px; width: 80px; height: 20px' >vac20</div>

</div>
<!-- 
	left of left_middle_id is set to 58px because width of left_id is set 50px and
	the border of left_id is set to 4px.  So 2 times 4px plus 50px is equal to 58px.
-->
<div id=left_middle_id style='position: absolute; top: 144px; left: 192px; width: 544px; height: 300px' >
</div>
<div id=middle_id style='position: absolute; top: 144px; left: 742px; width: 122px; height: 300px'>
</div>
<div id=footer_id style='position: absolute; top:452px; left:0px; width:872px; height: 50px'>
</div>
</body>
<script language="JavaScript" type="text/javascript" >
$('#menu1_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app17b/AJS_B.html";
});
$('#menu2_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app18a/MyMooTools18.php";
});
$('#menu3_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app18a/MyMooTools19.php";
});
$('#menu4_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app9/style03.html";
});
$('#menu5_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app8/style01.html";
});
$('#menu6_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app8/style02.html";
});
$('#menu7_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app7/array1.php";
});
$('#menu8_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app7/array2.php";
});
$('#menu9_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app6/nuclient.php";
});
$('#menu10_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app6/nuserver.php";
});
$('#menu11_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app5/phpinfopwd.php";
});
$('#menu12_id').click(function() {
  alert('Handler for .click() called.');
  location.href="/portfolio/app/app5/ming1.php";
});

// This section of code allows the top selection to become such that
// the background color is constant (rather than two tone), when the
// mouse is over it.  The constant color is the bottom of the two
// tones present.
var id_array = new Array(8);
var idb_array = new Array(8);
var co_array = new Array(8);

// Identify all top portions of each horizontal selection.
id_array[0] = '#home_id';
id_array[1] = '#layouts_id';
id_array[2] = '#clips_id';
id_array[3] = '#phpmisc_id';
id_array[4] = '#whatsnew_id';
id_array[5] = '#googleapps_id';
id_array[6] = '#share_id';
id_array[7] = '#documentation_id';

// Identify all bottom portions of each horizontal selection.
idb_array[0] = '#homeb_id';
idb_array[1] = '#layoutsb_id';
idb_array[2] = '#clipsb_id';
idb_array[3] = '#phpmiscb_id';
idb_array[4] = '#whatsnewb_id';
idb_array[5] = '#googleappsb_id';
idb_array[6] = '#shareb_id';
idb_array[7] = '#documentationb_id';

for (ct  = 0; ct < id_array.length; ct++)
{

	// Store the original background color so it can be available
	// for restore operation (that is, when the mouse moves away).
	co_array[ct] =$(id_array[ct]).css('background-color');
	
	// makechange: a function factory function that takes 1 parameter
	// and returns a function that takes 0 parameters.
	// This closure adjusts the color upon the mouse entering a certain
	// area.
	function makechange(theCt)
	{
		return function()
		{
			var color =$(window.idb_array[theCt]).css('background-color');
			$(window.id_array[theCt]).css('background-color', color);
		}
	};

	funcchange = makechange(ct);
	$(id_array[ct]).mouseover(funcchange);

	
	// makerestore: a function factory function that takes 1 parameter
	// and returns a function that takes 0 parameters.
	// This closure adjusts the color upon the mouse leaving a certain
	// area.
	function makerestore(theCt)
	{
		return function() {
			// Use the originally saved background color in the restore operation.
			$(window.id_array[theCt]).css('background-color', window.co_array[theCt]);
		}
	}
	funcrestore = makerestore(ct);
	// The restore operation occurs when the mouse moves out of the area
	// that temporarily changed.
	$(id_array[ct]).mouseout(funcrestore);
}

/*
$('#layouts_id').click(function() {
	$('#left_middle_id').html('<ul><li><a href="first.php">First</a><p> <li><a href="second.php">Second</a><p></ul>');
});
*/
function CLayouts1()
{
	function layouts_submenu()
	{
		menuItem1 = '<div id=layouts_submenu_e1_id class=layoutmenu style=\'position:absolute; top: 0px; left: 80px; width: 100px; height: 13px\'>First</div>';

		menuItem2 = '<div id=layouts_submenu_e2_id class=layoutmenu style=\'position:absolute; top: 16px; left: 80px; width: 100px; height: 13px\'>Second</div>';

		menuItem3 = '<div id=layouts_submenu_e3_id class=layoutmenu style=\'position:absolute; top: 32px; left: 80px; width: 100px; height: 13px\'>Third</div>';

		menuItem4 = '<div id=layouts_submenu_e4_id class=layoutmenu style=\'position:absolute; top: 48px; left: 80px; width: 100px; height: 13px\'>Fourth</div>';

		menuItem5 = '<div id=layouts_submenu_e5_id class=layoutmenu style=\'position:absolute; top: 64px; left: 80px; width: 100px; height: 13px\'>Fifth</div>';

		menuItem6 = '<div id=layouts_submenu_e6_id class=layoutmenu style=\'position:absolute; top: 80px; left: 80px; width: 100px; height: 13px\'>First (source)</div>';
		menuItem7 = '<div id=layouts_submenu_e7_id class=layoutmenu style=\'position:absolute; top: 96px; left: 80px; width: 100px; height: 13px\'>Second (source)</div>';

		menuItem8 = '<div id=layouts_submenu_e8_id class=layoutmenu style=\'position:absolute; top: 112px; left: 80px; width: 100px; height: 13px\'>Third (source)</div>';
		menuItem9 = '<div id=layouts_submenu_e9_id class=layoutmenu style=\'position:absolute; top: 128px; left: 80px; width: 100px; height: 13px\'>Fourth (source)</div>';
		retValue = menuItem1 + menuItem2 + menuItem3 + menuItem4 + menuItem5 + menuItem6 + menuItem7 + menuItem8 + menuItem9;
		return retValue;
	}
	this.submenu = layouts_submenu;
	function get_division_marker()
	{
		return "div";
	}
	this.get_division_marker = get_division_marker;
	function get_class_utilized()
	{
		return 'layoutmenu';
	}
	this.get_class_utilized = get_class_utilized;
}


// CLayouts2: this is regarded as an evolutionary step to developing submenus
// for the top horizonal menu.  This is not the current preferred one.
function CLayouts2()
{
	function layouts_submenu()
	{
		// The 'li' in the following fragment is important for client
		// code to know.  Accordingly, get_division_marker is supplied
		// as a method to return that value to it.
		retValue = '<ul><li><a href="first.php">First</a></li><li><a href="second.php">Second</a></li><p></ul>';
		return retValue;
	}
	this.submenu = layouts_submenu;
	function get_division_marker()
	{
		return "li";
	}
	this.get_division_marker = get_division_marker;
}

$('#layouts_id').click(function () {
	objLayout = new CLayouts1();
	htmlOutputLayout = objLayout.submenu();
	divisionMarker = objLayout.get_division_marker();
	$('#left_middle_id').html(htmlOutputLayout);
	classUtilized = objLayout.get_class_utilized();
	$('.' + classUtilized).hide();
	$('div.layoutmenu:eq(0)').show("1000", function () {
	     $(this).next(divisionMarker).show("1000", arguments.callee);
	});

	// Bind menu submenu selections to various URLS; go there when
	// each is clicked.

	mylayoutshome = getmylayoutsHome();  // Development or published ?
	$('#layouts_submenu_e1_id').click(function() {
		location.href = mylayoutshome + "first.php";
	});
	$('#layouts_submenu_e2_id').click(function() {
		location.href = mylayoutshome + "second.php";
	});
	$('#layouts_submenu_e3_id').click(function() {
		location.href = mylayoutshome + "third.php";
	});
	$('#layouts_submenu_e4_id').click(function() {
		location.href = mylayoutshome + "fourth.php";
	});
	$('#layouts_submenu_e5_id').click(function() {
		location.href = mylayoutshome + "fifth.php";
	});
	$('#layouts_submenu_e6_id').click(function() {
		location.href = mylayoutshome + "s_first.php";
	});
	$('#layouts_submenu_e7_id').click(function() {
		location.href = mylayoutshome + "s_second.php";
	});
	$('#layouts_submenu_e8_id').click(function() {
		location.href = mylayoutshome + "s_third.php";
	});
	$('#layouts_submenu_e9_id').click(function() {
		location.href = mylayoutshome + "s_fourth.php";
	});
});

// This code works, but it is evolutionary due to CLayouts2, which is
// not currently preferred.
/*
$('#layouts_id').click(function () {
	objLayout = new CLayouts2();
	htmlOutputLayout = objLayout.submenu();
	divisionMarker = objLayout.get_division_marker();
	$('#left_middle_id').html(htmlOutputLayout);
	$("li:eq(0)").show("slow", function () {
	  $(this).next(divisionMarker).show("slow", arguments.callee);
	});
});
*/

// CClips: this class represents a datatype that oversees the
// creation of a submenu associated with the Clips selection.
function CClips()
{
	// clips_submenu: outputs the appropriate html representing
	// all of the menu items associated with 'clips'.
	function clips_submenu()
	{
		menuItem1 = '<div id=clips_submenu_e1_id class=clipsmenu style=\'position:absolute; top: 0px; left: 180px; width: 100px; height: 13px\'>First</div>';

		retValue = menuItem1;
		return retValue;
	}
	this.submenu = clips_submenu;
	function get_division_marker()
	{
		return "div";
	}
	this.get_division_marker = get_division_marker;
	function get_class_utilized()
	{
		// The return value matches the class used in menuItem1.
		return "clipsmenu";
	}
	this.get_class_utilized = get_class_utilized;
}

$('#clips_id').click(function () {
	objCClips = new CClips();
	htmlOutputClips = objCClips.submenu();
	divisionMarker = objCClips.get_division_marker();
	$('#left_middle_id').html(htmlOutputClips);
	classUtilized = objCClips.get_class_utilized();
	$('.' + classUtilized).hide();
	$('div.clipsmenu:eq(0)').show("2000", function () {
	     $(this).next(divisionMarker).show("2000", arguments.callee);
	});
	$('#clips_submenu_e1_id').click(function() {
		location.href = "http://www.youtube.com/watch?v=JXWXbx2CK_U";
	});

});
////

function CPHPMisc()
{
	function layouts_submenu()
	{
		menuItem1 = '<div id=phpmisc_submenu_e1_id class=phpmiscmenu style=\'position:absolute; top: 0px; left: 280px; width: 100px; height: 13px\'>Globalstest</div>';

		menuItem2 = '<div id=phpmisc_submenu_e2_id class=phpmiscmenu style=\'position:absolute; top: 16px; left: 280px; width: 100px; height: 13px\'>Second_notused</div>';

		// retValue = menuItem1 + menuItem2 + menuItem3;
		retValue = menuItem1;
		return retValue;
	}
	this.submenu = layouts_submenu;
	function get_division_marker()
	{
		return "div";
	}
	this.get_division_marker = get_division_marker;
	function get_class_utilized()
	{
		return 'phpmiscmenu';
	}
	this.get_class_utilized = get_class_utilized;
}

function CWhatsNew()
{
	function whatsnew_submenu()
	{
		menuItem1 = '<div id=whatsnew_submenu_e1_id class=whatsnwmenu style=\'position:absolute; top: 0px; left: 380px; width: 100px; height: 13px\'>HTML5</div>';

		menuItem2 = '<div id=whatsnew_submenu_e2_id class=whatsnwmenu style=\'position:absolute; top: 16px; left: 380px; width: 100px; height: 13px\'>toolboxhtml5</div>';

		menuItem3 = '<div id=whatsnew_submenu_e3_id class=whatsnwmenu style=\'position:absolute; top: 32px; left: 380px; width: 100px; height: 13px\'>Third_notused</div>';

		// retValue = menuItem1 + menuItem2 + menuItem3;
		retValue = menuItem1 + menuItem2;
		return retValue;
	}
	this.submenu = whatsnew_submenu;
	function get_division_marker()
	{
		return "div";
	}
	this.get_division_marker = get_division_marker;
	function get_class_utilized()
	{
		return 'whatsnwmenu';
	}
	this.get_class_utilized = get_class_utilized;
}

////
// The following have no submenu under them, and thus, they act
// to clear any previously displayed submenu for other vertical
// selections.
$('#phpmisc_id').click(function () {
	// $('#left_middle_id').html("");
	objCPHPMisc = new CPHPMisc();
	htmlOutputClips = objCPHPMisc.submenu();
	divisionMarker = objCPHPMisc.get_division_marker();
	$('#left_middle_id').html(htmlOutputClips);
	classUtilized = objCPHPMisc.get_class_utilized();
	$('.' + classUtilized).hide();
	$('div.phpmiscmenu:eq(0)').show("2000", function () {
	     $(this).next(divisionMarker).show("2000", arguments.callee);
	});
	myphpmiscHome = getmyphpmiscHome();
	$('#phpmisc_submenu_e1_id').click(function() {
		// location.href = "http://myphpmisc.dev/globalstest.php";
		location.href = myphpmiscHome + "globalstest.php";
	});
});

$('#whatsnew_id').click(function () {
	// $('#left_middle_id').html("");
	objCWhatsNew = new CWhatsNew();
	htmlOutputWhatsNew = objCWhatsNew.submenu();
	divisionMarker = objCWhatsNew.get_division_marker();
	$('#left_middle_id').html(htmlOutputWhatsNew);
	classUtilized = objCWhatsNew.get_class_utilized();
	$('.' + classUtilized).hide();
	$('div.whatsnwmenu:eq(0)').show("2000", function () {
	     $(this).next(divisionMarker).show("2000", arguments.callee);
	});
	myhtml5Home = getmyhtml5Home();
	$('#whatsnew_submenu_e1_id').click(function() {
		location.href = myhtml5Home + "first.php";
	});
	$('#whatsnew_submenu_e2_id').click(function() {
		location.href = gettoolboxhtml5Home();
	});
});

$('#share_id').click(function () {
	$('#left_middle_id').html("");
});

$('#documentation_id').click(function () {
	$('#left_middle_id').html("");
});


// CGoogleApps: this class represents a datatype that oversees the
// creation of a submenu associated with the Google Apps selection.
function CGoogleApps()
{
	// googleapps_submenu: outputs the appropriate html representing
	// all of the menu items associated with 'GoogleApps'.
	function googleapps_submenu()
	{
		// The 'e' in the id attribute value stand for 'entry'.
		menuItem1 = '<div id=googleapps_submenu_e1_id class=googleappsmenu style=\'position:absolute; top: 0px; left: 530px; width: 100px; height: 13px\'>MyPythonDemo</div>';
		menuItem2 = '<div id=googleapps_submenu_e2_id class=googleappsmenu style=\'position:absolute; top: 16px; left: 530px; width: 100px; height: 13px\'>GoogleAppsPage</div>';
		retValue = menuItem1 + menuItem2;
		return retValue;
	}
	this.submenu = googleapps_submenu;
	function get_division_marker()
	{
		return "div";
	}
	this.get_division_marker = get_division_marker;
	function get_class_utilized()
	{
		// The return value matches the class used in menuItem1.
		return "googleappsmenu";
	}
	this.get_class_utilized = get_class_utilized;
}


$('#googleapps_id').click(function () {
	objCGoogleApps = new CGoogleApps();
	htmlOutputClips = objCGoogleApps.submenu();
	divisionMarker = objCGoogleApps.get_division_marker();
	$('#left_middle_id').html(htmlOutputClips);
	classUtilized = objCGoogleApps.get_class_utilized();
	$('.' + classUtilized).hide();
	$('div.googleappsmenu:eq(0)').show("2000", function () {
	     $(this).next(divisionMarker).show("2000", arguments.callee);
	});
	$('#googleapps_submenu_e1_id').click(function() {
		location.href = "http://mypythondemo.appspot.com/";
	});
	$('#googleapps_submenu_e2_id').click(function() {
		location.href = "http://appengine.google.com/";
	});

});
</script>

</html>

