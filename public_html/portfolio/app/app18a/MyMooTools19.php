<?php
// author: Raymond Byczko
// purpose: The purpose of this file is to illustrate JavaScript concepts with MooTools core and more.
// Further, it also provides an implementation of a rating system based on images, with drag and drop.
// pig photo from:
// http://www.public-domain-photos.com/animals/little-piggies-free-stock-photo-4.htm
// eggs-bacon photo from:
// http://www.public-domain-photos.com/food/eggs-bacon-free-stock-photo-4.htm

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="author" content="Raymond Byczko" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>MyMooTools19</title>
<style type="text/CSS">
.trek {font-style: italic}
</style>
</head>
<body>
<script language="JavaScript" type="text/javascript" src="mootools-1.2.4-core-nc.js" ></script> 
<script language="JavaScript" type="text/javascript" src="mootools-1.2.4.4-more.js" ></script> 

<div id="titleId" class="titleClass" style="color: blue; font-size: 24pt">
<pre>Drag and Drop Rating System</pre>
<script language="JavaScript" type="text/javascript">
var myFx = new Fx.Tween("titleId", "duration:10000");
myFx.start('color', '#000', '#f00'); 
</script>
</div>
<div id="instructionsId" class="trek" style="color: blue; font-size: 12pt">
<pre>For example, rate anything as three out of four pig faces! Or mix them!</pre> 
<pre>Drag an icon on left into green box and see it populated. A visual way of rating!</pre>
<pre>* Internet Explorer 8: left mouse down, hold, move, release left mouse, drag to container, left click (down and release)</pre>
<pre>Note: This is prototype software only! (by Raymond Byczko, JavaScript and Mootools (core and more), Sept. 2010)</pre>
</div>
<div id="button_container_pork" style="position: absolute; left: 100px; top: 300px; width: 350px" >
<div id="button1" style="position: absolute; left: 0px; top: 0px; width: 98px; height: 98px" >
<img src="/app18a/pigman_small_sq.jpg" alt="small square pigman-oink" />
</div>
<div id="button2" style="position: absolute; left: 109px; top: 0px; width: 98px; height: 98px" >
<img src="/app18a/pigrear_small_sq.jpg" alt="small square pig rear-oink" />
</div>
<div id="button3" style="position: absolute; left: 225px; top: 0px; width: 98px; height: 98px" >
<img src="/app18a/eggs-bacon_small_sq.jpg" alt="small square eggs and bacon" />
</div>
</div>


<script language="JavaScript" type="text/javascript">
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

	// numVacancies: indicates the number of vacancies a box can hold.
	// Its legal values are greater than or equal to 0.  When this.numDrops == this.numVacancies,
	// then the box is full.
	this.numVacancies = 0;
	
	// bWithinBounds: determines whether or not src is completely within the bounds of
	// dest.  Each object is expected to have the following attributes: top, left, width,
	// and height.  Note that source object given by src must be completely within
	// the destination object, otherwise false is returned.  This means the source object
	// must be smaller than the destination object.
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

	// bWithinBoundsCenter: this determines if the center of src is within the bound
	// specified by the destination container.  This allows source images and objects
	// to be larger than the destination container.
	//
	// srcdiffX: this is the source differential on the X axis and is relevant
	// when the source area is in its own division.
	//
	// srcdiffY: similiar to srcdiffX, except along the Y axis.
	function bWithinBoundsCenter(src, srcdiffX, srcdiffY) {
		var midY = src.top + src.height/2;	
		var midX = src.left + src.width/2;


		if (!(midY + srcdiffY >= this.top)) {
			return false;
		}
		if (!(midY + srcdiffY <= (dest.top + this.height) )) {
			return false;
		}
		if (!(midX + srcdiffX >= this.left)) {
			return false;
		}
		if (!( midX + srcdiffX <= (this.left + this.width)  )) {
			return false;
		}
		this.numDrops = this.numDrops + 1;
		return true;
	}
	this.bWithinBoundsCenter = bWithinBoundsCenter;

	// get and set functions for numDrops.
	function resetNumDrops() {
		this.numDrops = 0;
	}
	this.resetNumDrops = resetNumDrops;

	function getNumDrops() {
		return this.numDrops;
	}
	this.getNumDrops = getNumDrops;

	// get and set functions for numVacancies.
	function getNumVacancies() {
		return this.numVacancies;
	}
	this.getNumVacancies = getNumVacancies;

	function setNumVacancies(newVacancies) {
		this.numVacancies = newVacancies;
	}
	this.setNumVacancies = setNumVacancies;
}

// CDestinationBox derives from CBox.
CDestinationBox.prototype = new CBox();


// var btn1 = document.getElementById("button1");

var btn1 = $("button1");
btn1.draggable = true;

// Preserve original coordinates of button1
var btn1CBox = new CBox();
btn1CBox.loadByElement(btn1);
///// 

function btn1Completefunction(el) {
	var brkPt3 = 3;
	var btn1Src = new CBox();
	btn1Src.top = el.offsetTop;
	btn1Src.height = el.offsetHeight;
	btn1Src.left = el.offsetLeft;
	btn1Src.width = el.offsetWidth;
	var retWithin = bWithinBounds(btn1Src, destS2);
	var retWithin2 = destBox.bWithinBoundsCenter(btn1Src, 100, 300);
	if (retWithin2) {
		btn1Clone = btn1.clone();
		btn1Clone.setStyle("left", "0px");
		btn1Clone.setStyle("top", "0px");
		numDrops = destBox.getNumDrops();
		numVac = destBox.getNumVacancies();
		if (numDrops <= numVac) {
			idOfUpdate = objIdArray[numDrops-1];
			btn1Clone.inject($(idOfUpdate));
		}

	}
	btn1.setStyle("left", btn1CBox.left.toString() + "px");	
	btn1.setStyle("top", btn1CBox.top.toString() + "px");	
	btn1.setStyle("width", btn1CBox.width.toString() + "px");	
	btn1.setStyle("height", btn1CBox.height.toString() + "px");	
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
	onComplete: btn1Completefunction 

	}
	);
/////

// var btn2 = document.getElementById("button2");
var btn2 = $("button2");

// Preserve original coordinates of button2
var btn2CBox = new CBox();
btn2CBox.loadByElement(btn2);

//*

function btn2Completefunction(el) {
	var btn2Src = new CBox();
	btn2Src.top = el.offsetTop;
	btn2Src.height = el.offsetHeight;
	btn2Src.left = el.offsetLeft;
	btn2Src.width = el.offsetWidth;
	var retWithin2 = destBox.bWithinBoundsCenter(btn2Src, 100 , 300);
	if (retWithin2) {
		btn2Clone = btn2.clone();
		btn2Clone.setStyle("left", "0px");
		btn2Clone.setStyle("top", "0px");
		numDrops = destBox.getNumDrops();
		numVac = destBox.getNumVacancies();
		if (numDrops <= numVac) {
			idOfUpdate = objIdArray[numDrops-1];
			btn2Clone.inject($(idOfUpdate));
		}
	}

	btn2.setStyle("left", btn2CBox.left.toString() + "px");	
	btn2.setStyle("top", btn2CBox.top.toString() + "px");	
	btn2.setStyle("width", btn2CBox.width.toString() + "px");	
	btn2.setStyle("height", btn2CBox.height.toString() + "px");	
	var brkPt3b = 4;
}
var btn2DragInstance = new Drag(btn2,
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
	onComplete: btn2Completefunction 

	}
	);
//**

// var btn3 = document.getElementById("button3");
var btn3 = $("button3");

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
		var retWithin2 = destBox.bWithinBoundsCenter(btn3Src, 100 , 300);
		if (retWithin2) {
			btn3Clone = btn3.clone();
			btn3Clone.setStyle("left", "0px");
			btn3Clone.setStyle("top", "0px");
			numDrops = destBox.getNumDrops();
			numVac = destBox.getNumVacancies();
			if (numDrops <= numVac) {
				idOfUpdate = objIdArray[numDrops-1];
				btn3Clone.inject($(idOfUpdate));
			}
		}
		btn3.setStyle("left", btn3CBox.left.toString() + "px");	
		btn3.setStyle("top", btn3CBox.top.toString() + "px");	
		btn3.setStyle("width", btn3CBox.width.toString() + "px");	
		btn3.setStyle("height", btn3CBox.height.toString() + "px");	
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

<div id="ChosenRating" style="position: absolute; left: 600px; top: 280px; width: 230px; height: 500px; background-color: green">
</div>


<script language="JavaScript" type="text/javascript">
var destS = $('ChosenRating');

// CVerticalBox: this is a class that contains methods for managing a vertical box.  That vertical box
// can be subdivided a certain number of times, and can be populated sparsely or completely.
// Essentially, it can put a bunch of div-s inside a parental div.
function CVerticalBox() {

	// create: injects a number of divisions inside the parentalContainer.  The number is equal
	// to the extent of the array given by ids.  Each is child division is given the id of ids[i].
	// diffY: the space between the divisions.
	function create(parentalContainer, ids, diffY) {
		for (var i=0; i<ids.length; i++) {
			var newSpotId = ids[i];
			var styleString = "position: absolute; left: 30px; top: " + (i*98 + i*diffY + 10).toString() + "px; " + "width: 98px; height: 98px; background-color: black";
			var newSpot = new Element('div', {
							id: newSpotId, 
							style: styleString,
							});
			newSpot.inject(parentalContainer, 'bottom');
		}
	}
	this.create = create;
}
objVB = new CVerticalBox();
objIdArray = ['spot4b', 'spot5', 'spot6', 'spot7'];
objVB.create(destS, objIdArray, 25);

var destS2 = new CBox();
destS2.top = destS.offsetTop;
destS2.height = destS.offsetHeight;
destS2.left = destS.offsetLeft;
destS2.width = destS.offsetWidth;

var destBox = new CDestinationBox(destS2);
destBox.setNumVacancies(objIdArray.length);
var brkPtHere3 = 3;
</script>

</body>
</html>
