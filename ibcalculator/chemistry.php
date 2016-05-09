<?php

include('../Template/Swiki.php');

$calculator = new calculator;



$title = "IB Chemistry HL";
$keywords="IB Chemistry, Chemistry, Chemistry SL, Chemistry HL, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$js = "../js/ibchemistry.js";
$css = "../css/styleib.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0198393539&asins=0198393539&linkId=RGU4A2VDBWUYC5IY&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
<h2>Chemistry HL<img src="../images/Science.png" alt="Science"></h2>

<div id="calculator">

		<div class="calculate">
			<h3>Enter your scores below</h3>
			<p>Choose a strand</p>
				<p><input style="margin-left: 30px;" type="radio" name="strand" id="hl" onclick="calculate()" /checked>HL</p>

		</div>

	<div id="calculate">




			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="40" onmouseup="slidervalue(\'P1\',\'P11\'), calculate();" ontouchend="slidervalue(\'P1\',\'P11\'), calculate();"/><input type="number" min="0" max="40" step="1" id="P11" value="20" style="width: 40px;" onchange="slidervalue(\'P11\',\'P1\'), calculate();"/>/40</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="90" onmouseup="slidervalue(\'P2\',\'P22\'), calculate();" ontouchend="slidervalue(\'P2\',\'P22\'), calculate();"/><input type="number" min="0" max="90" step="1" id="P22" value="36" style="width: 40px;" onchange="slidervalue(\'P22\',\'P2\'), calculate();"/>/90</p>
			<p><label>Paper 3 Score</label></p>
				<p><input type="range" id="P3" min="0" step="1" max="50" onmouseup="slidervalue(\'P3\',\'P33\'), calculate();" ontouchend="slidervalue(\'P3\',\'P33\'), calculate();"/><input type="number" min="0" max="50" step="1" id="P33" value="20" style="width: 40px;" onchange="slidervalue(\'P33\',\'P3\'), calculate();"/>/50</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="48"onmouseup="slidervalue(\'IS\',\'IS2\'), calculate();" ontouchend="slidervalue(\'IS\',\'IS2\'), calculate();"/><input type="number" min="0" max="48" step="1" id="IS2" value="24" style="width: 40px;" onchange="slidervalue(\'IS2\',\'IS\'), calculate();"/>/48</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" /checked>2008 curve</p>





	</div>





	<div id="results" style="text-align: center;">
		<p>Total Score</p>
			<output id="score1"></output>
		<p>Estimated Grade</p>
			<p><output id="score2"></output></p>
	</div>

</div>

';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
