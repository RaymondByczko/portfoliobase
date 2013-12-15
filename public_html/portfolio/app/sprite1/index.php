<!DOCTYPE HTML>
<html>
<head>
<link rel=stylesheet type="text/css" href="css/styles.css"></link>
</head>
<body>
<div id="body_id">
<div id="orange_id">
<span>ora</span>
</div>
<div id="red_id">
<span>red</span>
</div>
<div id="voilet_id">
<span>voilet</span>
</div>

<div id="white_id">
<span>white</span>
<span>dogs</span>
<span>eat</span>
<span>twinkies</span>
</div>

<div id="house1">
</div>
<div id="fountain1">
</div>
<div id="rocket_border">
<div id="rocket">
</div>
</div>
<div id="movie_border">
<div id="clip_border" class="clipedge">
<layer id="layer1">
<img id="motorguy"
class="transp" src="images/transparent.png">
</layer>
<layer id="layer2">
<div id="building">
</div>
</layer>
</div>
</div>
<div id="buttonstart" style="position: absolute; left: 80px; top: 0px">
<button onclick="startanimation();">Start</button>
</div>
</div>

<script>
function startanimation()
{
	document.getElementById("motorguy").style.animationPlayState = 'running';
	document.getElementById("motorguy").style.webkitAnimationPlayState = 'running';
}
</script>
</body>
</html>
