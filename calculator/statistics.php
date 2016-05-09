<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Statistics";
$keywords="AP Stat, AP Statistics, Statistics, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/statistics.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438004982&asins=1438004982&linkId=GELDUSEV53GCKO54&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Statistics<img src="../images/Stat.png" alt="stats"></h2>
	<div id="calculator">


	<div id="calculate">


     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="40" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="40" step="1" id="MC2" value="20" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/40</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ11" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/4</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ22" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/4</p>
			<p><label>FRQ3 Score</label></p>
				<p><input type="range" id="FRQ3" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();" ontouchend="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ33" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ33\',\'FRQ3\'), calculate();"/>/4</p>
			<p><label>FRQ4 Score</label></p>
				<p><input type="range" id="FRQ4" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();" ontouchend="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ44" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ44\',\'FRQ4\'), calculate();"/>/4</p>
			<p><label>FRQ5 Score</label></p>
				<p><input type="range" id="FRQ5" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();" ontouchend="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ55" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ55\',\'FRQ5\'), calculate();"/>/4</p>
			<p><label>FRQ6 Score</label></p>
				<p><input type="range" id="FRQ6" min="0" step="1" max="4" onmouseup="slidervalue(\'FRQ6\',\'FRQ66\'), calculate();" ontouchend="slidervalue(\'FRQ6\',\'FRQ66\'), calculate();"/><input type="number" min="0" max="4" step="1" id="FRQ66" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ66\',\'FRQ6\'), calculate();"/>/4</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2007 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2002 curve</p>





	</div>
	<div id="results" style="text-align: center;">
		<p>Weighted Section I Score</p>
			<output id="score1"></output>
		<p>Weighted Section II Score</p>
			<p><output id="score2"></output></p>
		<p>Composite Score</p>
			<p><output id="score3"></output></p>
		<p>Predicted AP Score</p>
			<p><output id="score4"></output></p>

	</div>

</div>
';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
