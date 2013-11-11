<?php
if  (array_key_exists('hair', $_COOKIE) == false) 
{
	setcookie('hair', 'redhed', time() + 60*60*3);
}
?>
<html>
<head>
<title>MyMooTools07</title>
<style>
.trek {font-style: italic}
.starwars {font-style: oblique; font-size: 28pt}
</style>
</head>
<body>
<script language="JavaScript" type="text/javascript" src="mootools-1.2.4-core-nc.js" ></script> 
<script language="JavaScript" type="text/javascript" src="mootools-1.2.4.4-more.js" ></script> 
<script type="application/javascript;version=1.7" language="JavaScript" language="text/javascript" >
</script>

<div id="starTrekId" class=trek style="color: blue; font-size: 24pt">
<pre>Star Trek rocks!!</pre>
<script language="JavaScript" type="text/javascript">
var myFx = new Fx.Tween("starTrekId", "duration:10000");
myFx.start('color', '#000', '#f00'); 
</script>
</div>
<script language="JavaScript" type="text/javascript">
var eventList = new Array(25);
var numEvents = 0;
var srcBtn;
function eventHandler_btn1()
{
	srcBtn = "button1";
	eventList[numEvents] = "button1";
	numEvents++;
	window.alert("Event fired");
};


function eventHandlermd_btn1()
{
	srcBtn = "button1";
	eventList[numEvents] = "button1md";
	numEvents++;
	window.alert("Event fired");
}


function eventHandlermu_btn1()
{
	srcBtn = "button1";
	eventList[numEvents] = "button1mu";
	numEvents++;
	window.alert("Event fired");
}


function eventHandler_btn2()
{
	srcBtn = "button2";
	eventList[numEvents] = "button2";
	numEvents++;
	window.alert("Event fired");
};

function eventHandlermd_btn2()
{
	srcBtn = "button2";
	eventList[numEvents] = "button2md";
	numEvents++;
	window.alert("Event fired");
};

window.onload = function() {
var btn1 = document.getElementById("button1");
if (btn1.addEventListener) {
	btn1.addEventListener("click", eventHandler_btn1, true);
	btn1.addEventListener("mousedown", eventHandlermd_btn1, true);
	btn1.addEventListener("mouseup", eventHandlermu_btn1, true);
} else if (btn1.attachEvent) {
	btn1.attachEvent("onclick", eventHandler_btn1);
	btn1.attachEvent("onmousedown", eventHandlermd_btn1);
}


var btn2 = document.getElementById("button2");
if (btn2.addEventListener) {
	btn2.addEventListener("click", eventHandler_btn2, false);
} else if (btn2.attachEvent) {
	btn2.attachEvent("onclick", eventHandler_btn2);
}
};


</script>
<div id="button1" style="position: absolute; left: 0px; top: 300px; width: 50px; height: 40px; background-color: red">
</div>
<div id="button2" style="position: absolute; left: 55px; top: 300px; width: 50px; height: 40px; background-color: blue">
</div>
<div id="button3" style="position: absolute; left: 110px; top: 300px; width: 50px; height: 40px; background-color: green">
</div>


<script language="JavaScript" type="text/javascript">
// var dest = $('Sunday');
function CBox() {
	this.top;
	this.height;
	this.left;
	this.width;
	function loadByElement(el)
	{
		this.left = el.getStyle('left');
		this.top = el.getStyle('top');
		this.width = el.getStyle('width');
		this.height = el.getStyle('height');
		re = /px/g;
		this.left = new Number(this.left.replace(re, ""));
		this.top = new Number(this.top.replace(re, ""));
		this.width = new Number(this.width.replace(re, ""));
		this.height = new Number(this.height.replace(re, ""));
		var anIntVar = 100;
		var brkPt101 = 101;
	}
	this.loadByElement = loadByElement;
};

// CDestinationBox: a destination box for dropping things into.  The destination outline
// is defined by dest.  In addition to determing if a source box (indicated by src
// in the method bWithinBounds) has been dropped, this class also keeps
// track of the number of drops.
function CDestinationBox(dest) {
	this.top = dest.top;
	this.height = dest.height;
	this.left = dest.left;
	this.width = dest.width;
	// numDrops: indicates the number of objects dropped into the destinaton box.
	// In this way, the destination box is acting like a counter.
	this.numDrops = 0;
	
	// bWithinBounds: determines whether or not src is completely within the bounds of
	// dest.  Each object is expected to have the following attributes: top, left, width,
	// and height.
	function bWithinBounds(src) {
		if (!(src.top >= this.top)) {
			return false;
		}
		if (!((src.top + src.height) <= (dest.top + this.height) )) {
			return false;
		}
		if (!(src.left >= this.left)) {
			return false;
		}
		if (!( (src.left + src.width) <= (this.left + this.width)  )) {
			return false;
		}
		this.numDrops = this.numDrops + 1;
		return true;
	}
	this.bWithinBounds = bWithinBounds;

	function resetNumDrops() {
		this.numDrops = 0;
	}
	this.resetNumDrops = resetNumDrops;

	function getNumDrops() {
		return this.numDrops;
	}
	this.getNumDrops = getNumDrops;
}

// CDestinationBox derives from CBox.
CDestinationBox.prototype = new CBox();


var btn1 = document.getElementById("button1");

// Preserve original coordinates of button3
var btn1CBox = new CBox();
btn1CBox.loadByElement(btn1);
///// 

function myonCompletefunction(el) {
	var theLeftPos2 = el.getStyle('left');
	var theTopPos2 = el.getStyle('top');
	var brkPt3 = 3;
	var btn1Src = new CBox();
	btn1Src.top = el.offsetTop;
	btn1Src.height = el.offsetHeight;
	btn1Src.left = el.offsetLeft;
	btn1Src.width = el.offsetWidth;
	var retWithin = bWithinBounds(btn1Src, destS2);
	var retWithin2 = destBox.bWithinBounds(btn1Src);
	if (retWithin2) {
		btn1.setStyle("left", btn1CBox.left.toString() + "px");	
		btn1.setStyle("top", btn1CBox.top.toString() + "px");	
		btn1.setStyle("width", btn1CBox.width.toString() + "px");	
		btn1.setStyle("height", btn1CBox.height.toString() + "px");	
	}
	var brkPt3b = 4;
}

var btn1DragInstance = new Drag(btn1,
	{
	invert: false, 
	onBeforeStart: function(el) {
		// following returns non-null
		var theStyle = el.get('style');
		var theLeftPos2 = el.getStyle('left');
		var theTopPos2 = el.getStyle('top');
		var theWidthPos2 = el.getStyle('width');
		var theHeightPos2 = el.getStyle('height');
		var brkPt2 = 2;
	},
	onComplete: function(myonCompletefunctiona) {}

	}
	);
/////
var btn3 = document.getElementById("button3");

// Preserve original coordinates of button3
var btn3CBox = new CBox();
btn3CBox.loadByElement(btn3);

var btn3DragInstance = new Drag(btn3,
	{
	invert: false, 
	onBeforeStart: function(el) {
		// following returns non-null
		var theStyle = el.get('style');
		var theLeftPos2 = el.getStyle('left');
		var theTopPos2 = el.getStyle('top');
		var theWidthPos2 = el.getStyle('width');
		var theHeightPos2 = el.getStyle('height');
		var brkPt2 = 2;
	},
	onComplete: function(el) {
		var theLeftPos2 = el.getStyle('left');
		var theTopPos2 = el.getStyle('top');
		var brkPt3 = 3;
		var btn3Src = new CBox();
		btn3Src.top = el.offsetTop;
		btn3Src.height = el.offsetHeight;
		btn3Src.left = el.offsetLeft;
		btn3Src.width = el.offsetWidth;
		var retWithin = bWithinBounds(btn3Src, destS2);
		var retWithin2 = destBox.bWithinBounds(btn3Src);
		if (retWithin2) {
			btn3.setStyle("left", btn3CBox.left.toString() + "px");	
			btn3.setStyle("top", btn3CBox.top.toString() + "px");	
			btn3.setStyle("width", btn3CBox.width.toString() + "px");	
			btn3.setStyle("height", btn3CBox.height.toString() + "px");	
		}
		var brkPt3b = 4;
	}
	});
// bWithinBounds: determines whether or not src is completely within the bounds of
// dest.  Each object is expected to have the following attributes: top, left, width,
// and height.
function bWithinBounds(src, dest) {
	if (!(src.top >= dest.top)) {
		return false;
	}
	if (!((src.top + src.height) <= (dest.top + dest.height) )) {
		return false;
	}
	if (!(src.left >= dest.left)) {
		return false;
	}
	if (!( (src.left + src.width) <= (dest.left + dest.width)  )) {
		return false;
	}
	return true;
}

var brkPt1 = 1;
</script>

<div id="Sunday" style="position: absolute; left: 0px; top: 160px; width: 330px; height: 90px; background-color: green"></div>

<script language="JavaScript" type="text/javascript">
var cookies = document.cookie.split(/; /g);
// var cookies2 = Cookie();
var destS = $('Sunday');
var destS2 = new CBox();
destS2.top = destS.offsetTop;
destS2.height = destS.offsetHeight;
destS2.left = destS.offsetLeft;
destS2.width = destS.offsetWidth;

var destBox = new CDestinationBox(destS2);
var brkPtHere3 = 3;
</script>

</body>
</html>
