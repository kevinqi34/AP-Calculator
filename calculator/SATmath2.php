<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT Math 2";
$keywords="Math 2, SAT Math 2, SAT Math, sat math, math 2, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATmath2.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438003749&asins=1438003749&linkId=65Y7U5UPXSTDFZ5G&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
<h2>Math 2<img src="../images/Math.png" alt="Math"></h2>
<div id="calculator">

	<div id="calculate">


     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="50" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="50" step="1" id="MC2" value="25" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/50</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" max="50" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="50" step="1" id="MC4" value="25" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/50</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2014 curve</p>


	</div>

	<div id="results" style="text-align: center;">
		<p>Raw Score</p>
			<output id="score1"></output>
		<p>Scaled Score</p>
			<p><output id="score2"></output></p>

	</div>
</div>
';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
