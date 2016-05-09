<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Macroeconomics";
$keywords="AP Macro, AP Macroeconomics, Macroeconomics, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/macroeconomics.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438004958&asins=1438004958&linkId=HLOALFAH3MDP6PP5&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Macroeconomics<img src="../images/Money.png" alt="Money"></h2>
		<div id="calculator">

	<div id="calculate">




			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="60" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();"  ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="60" step="1" id="MC2" value="30" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/60</p>
			<p><label>Long FRQ Score (%)</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="100" onmouseup="slidervalue(\'FRQ1\',\'FRQ2\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ2\'), calculate();"/><input type="number" min="0" max="100" step="1" id="FRQ2" value="50" style="width: 50px;" onchange="slidervalue(\'FRQ2\',\'FRQ1\'), calculate();"/>/100</p>
			<p><label>Short FRQ1 Score (%)</label></p>
				<p><input type="range" id="SRQ1" min="0" step="1" max="100" onmouseup="slidervalue(\'SRQ1\',\'SRQ11\'), calculate();" ontouchend="slidervalue(\'SRQ1\',\'SRQ11\'), calculate();"/><input type="number" min="0" max="100" step="1" id="SRQ11" value="50" style="width: 50px;" onchange="slidervalue(\'SRQ11\',\'SRQ1\'), calculate();"/>/100</p>
			<p><label>Short FRQ2 Score (%)</label></p>
				<p><input type="range" id="SRQ2" min="0" step="1" max="100" onmouseup="slidervalue(\'SRQ2\',\'SRQ22\'), calculate();" ontouchend="slidervalue(\'SRQ2\',\'SRQ22\'), calculate();"/><input type="number" min="0" max="100" step="1" id="SRQ22" value="50" style="width: 50px;" onchange="slidervalue(\'SRQ22\',\'SRQ2\'), calculate();"/>/100</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2005 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2000 curve</p>






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
