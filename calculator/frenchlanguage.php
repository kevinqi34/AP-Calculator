<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP French Language";
$keywords="AP French, AP French Language, French Language, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/frenchlanguage.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438076037&asins=1438076037&linkId=2EPRTWUFEHFELIUO&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>French Language<img src="../images/French.gif" alt="France"></h2>
<div id="calculator">


	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Listening Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="39" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="39" step="1" id="MC2" value="19" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/39</p>
			<p><label>Reading Multiple Choice Score</label></p>
				<p><input type="range" id="MC3" min="0" step="1" max="46" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="46" step="1" id="MC4" value="23" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/46</p>
			<p><label>Function Words</label></p>
				<p><input type="range" id="FW" min="0" step="1" max="15"  onmouseup="slidervalue(\'FW\',\'FW2\'), calculate();" ontouchend="slidervalue(\'FW\',\'FW2\'), calculate();"/><input type="number" min="0" max="15" step="1" id="FW2" value="7" style="width: 50px;" onchange="slidervalue(\'FW2\',\'FW\'), calculate();"/>/15</p>
			<p><label>Verb Fill-ins</label></p>
				<p><input type="range" id="V" min="0" step="1" max="15" onmouseup="slidervalue(\'V\',\'V2\'), calculate();" ontouchend="slidervalue(\'V\',\'V2\'), calculate();"/><input type="number" min="0" max="15" step="1" id="V2" value="7" style="width: 50px;" onchange="slidervalue(\'V2\',\'V\'), calculate();"/>/15</p>
			<p><label>Essay Score</label></p>
				<p><input type="range" id="FRQ" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ\',\'FRQ2\'), calculate();" ontouchend="slidervalue(\'FRQ\',\'FRQ2\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ2" value="5" style="width: 50px;" onchange="slidervalue(\'FRQ2\',\'FRQ\'), calculate();"/>/9</p>
			<p><label>Speaking Questions</label></p>
				<p><input type="range" id="SPK" min="0" step="1" max="25" onmouseup="slidervalue(\'SPK\',\'SPK2\'), calculate();" ontouchend="slidervalue(\'SPK\',\'SPK2\'), calculate();"/><input type="number" min="0" max="9" step="1" id="SPK2" value="5" style="width: 50px;" onchange="slidervalue(\'SPK2\',\'SPK\'), calculate();"/>/25</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>






	</div>
	<div id="results" style="text-align: center; ">
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
