<!--
	file: websites/mylayouts.dev/fifth.php
	author: Raymond Byczko
	start date: December 2010
	purpose: to demonstrate video and audio capability with
	HTML 5.

	See the div id, footer_id in this file and in
	gen_styles_mylayouts5.css .

-->
<html>
<head>
<link rel=stylesheet href=css/gen_styles_mylayouts5.css type=text/css>
<title>Movie Control</title>
</head>
<body>
<div id=masthead_id style='position: absolute; top:0px; left: 0px; width: 872px; height: 100px'>
<div id=mv_id style='position: absolute; top: 5px; left: 5px; width: 175px; height: 83px'></div>
<div id=trail_id style='position: absolute; top: 5px; left: 180px; width: 300px; height: 83px' ></div>
</div>
<div id=header_id style='position: absolute; top:100px; left:0px; width:864px; height: 36px'>
<div id=home_id class=hmenu style='position:absolute; top: 0px; left: 0px; width: 100px; height: 28px'>Home
<div id=homeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=videos_id class=hmenu style='position:absolute; top: 0px; left: 108px; width: 100px; height: 28px'>Videos
<div id=videosb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=clips_id class=hmenu style='position:absolute; top: 0px; left: 216px; width: 100px; height: 28px'>Clips
<div id=clipsb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=tech_id class=hmenu style='position:absolute; top: 0px; left: 324px; width: 100px; height: 28px'>Tech
<div id=techb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=whatsnew_id class=hmenu style='position:absolute; top: 0px; left: 432px; width: 100px; height: 28px'>Whats New
<div id=whatsnewb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
</div>
<div id=subscribe_id class=hmenu style='position:absolute; top: 0px; left: 540px; width: 100px; height: 28px'>Subscribe
<div id=subscribeb_id class=hmenub style='position: absolute; top: 15px; left: 0px; width: 99px; height: 13px'></div>
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
<div id=left_id style='position: absolute; top:144px; left: 0px; width: 50px; height: 300px' >
<div id=menu1_id style='position: absolute; top: 0px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu2_id style='position: absolute; top: 28px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu3_id style='position: absolute; top: 56px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu4_id style='position: absolute; top: 84px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu5_id style='position: absolute; top: 112px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu6_id style='position: absolute; top: 140px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu7_id style='position: absolute; top: 168px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu8_id style='position: absolute; top: 196px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu9_id style='position: absolute; top: 224px; left:0px; width: 42px; height: 20px' ></div>
<div id=menu10_id style='position: absolute; top: 252px; left:0px; width: 42px; height: 20px' ></div>

</div>
<!-- 
	left of left_middle_id is set to 58px because width of left_id is set 50px and
	the border of left_id is set to 4px.  So 2 times 4px plus 50px is equal to 58px.
-->
<div id=left_middle_id style='position: absolute; top: 144px; left: 58px; width: 396px; height: 300px' >
<div id=video_id_0_0 style='position: absolute; top: 0px; left: 0px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM0024.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_1_0 style='position: absolute; top: 100px; left: 0px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM0495.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_2_0 style='position: absolute; top: 200px; left: 0px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM1511.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_0_1 style='position: absolute; top: 0px; left: 132px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM1624.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_1_1 style='position: absolute; top: 100px; left: 132px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM5463.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_2_1 style='position: absolute; top: 200px; left: 132px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM7613.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_0_2 style='position: absolute; top: 0px; left: 264px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM7662.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_1_2 style='position: absolute; top: 100px; left: 264px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM7683.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=video_id_2_2 style='position: absolute; top: 200px; left: 264px; width: 132px; height: 100px' >
<video  controls type="video/ogv" controls height="100px" autoplay loop >
<source src="./video/HPIM1642.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
</div>
<div id=middle_id style='position: absolute; top: 144px; left: 462px; width: 402px; height: 300px'>
<video  controls type="video/ogv" controls height="300px" >
<source src="./cooking.ogv" >
Your browser doesnt support cooking.<code>video</code> element.
</video>
</div>
<div id=footer_id style='position: absolute; top:452px; left:0px; width:872px; height: 50px'>
</div>
</body>
</html>

