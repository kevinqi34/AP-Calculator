<?php

include('../Template/Swiki.php');

$calculator = new calculator;



$title = "IB English A2 HL/SL";
$keywords="IB English, English A2, English A2 SL, English A2 HL, IB English A2, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$js = "../js/ibenglisha2.js";
$css = "../css/styleib.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0198390084&asins=0198390084&linkId=HWFFLEEF32XPV6VG&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>English A2 HL/SL<img src="../images/English.png" alt="English"></h2>

<div id="calculator">



	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p>Choose a strand</p>
				<p><input type="radio" name="strand" id="sl" onclick="calculate()" checked/>SL<input style="margin-left: 30px;" type="radio" name="strand" id="hl" onclick="calculate()">HL</p>
			<p><label>Written Task Score</label></p>
				<p><input type="range" id="WLA" min="0" step="1" max="40" onmouseup="slidervalue(\'WLA\',\'WLA2\'), calculate();" ontouchend="slidervalue(\'WLA\',\'WLA2\'), calculate();"/><input type="number" min="0" max="40" step="1" id="WLA2" value="20" style="width: 40px;" onchange="slidervalue(\'WLA2\',\'WLA\'), calculate();"/>/40</p>
			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="30" onmouseup="slidervalue(\'P1\',\'P11\'), calculate();" ontouchend="slidervalue(\'P1\',\'P11\'), calculate();"/><input type="number" min="0" max="30" step="1" id="P11" value="15" style="width: 40px;" onchange="slidervalue(\'P11\',\'P1\'), calculate();"/>/30</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="30" onmouseup="slidervalue(\'P2\',\'P22\'), calculate();" ontouchend="slidervalue(\'P2\',\'P22\'), calculate();"/><input type="number" min="0" max="30" step="1" id="P22" value="15" style="width: 40px;" onchange="slidervalue(\'P22\',\'P2\'), calculate();"/>/30</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="60"onmouseup="slidervalue(\'IS\',\'IS2\'), calculate();" ontouchend="slidervalue(\'IS\',\'IS2\'), calculate();"/><input type="number" min="0" max="60" step="1" id="IS2" value="30" style="width: 40px;" onchange="slidervalue(\'IS2\',\'IS\'), calculate();"/>/60</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve</p>





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
