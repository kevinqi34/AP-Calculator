<?php

include('../Template/Swiki.php');

$calculator = new calculator;



$title = "IB Computer Science HL/SL";
$keywords="IB Computer Science, Computer Science, Computer Science SL, Computer Science HL, IB Computer Science, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$js = "../js/ibcomputers.js";
$css = "../css/styleib.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1876659041&asins=1876659041&linkId=5TY4HU3XMCPSUCCN&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
<h2>Computer Science HL/SL<img src="../images/Computer.png" alt="Computer"></h2>

<div id="calculator">

		<div class="calculate">
			<h3>Enter your scores below</h3>
			<p>Choose a strand</p>
				<p><input onchange="changediv();" type="radio" name="strand" id="sl" onclick="calculate()" /checked>SL<input onchange="changediv();" style="margin-left: 30px;" type="radio" name="strand" id="hl" onclick="calculate()">HL</p>

		</div>

	<div id="calculate">




			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="100" onmouseup="slidervalue(\'P1\',\'P11\'), calculate();" ontouchend="slidervalue(\'P1\',\'P11\'), calculate();"/><input type="number" min="0" max="100" step="1" id="P11" value="50" style="width: 40px;" onchange="slidervalue(\'P11\',\'P1\'), calculate();"/>/100</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="100" onmouseup="slidervalue(\'P2\',\'P22\'), calculate();" ontouchend="slidervalue(\'P2\',\'P22\'), calculate();"/><input type="number" min="0" max="100" step="1" id="P22" value="50" style="width: 40px;" onchange="slidervalue(\'P22\',\'P2\'), calculate();"/>/100</p>
			<p><label>Dossier Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="50" onmouseup="slidervalue(\'IS\',\'IS2\'), calculate();" ontouchend="slidervalue(\'IS\',\'IS2\'), calculate();"/><input type="number" min="0" max="50" step="1" id="IS2" value="25" style="width: 40px;" onchange="slidervalue(\'IS2\',\'IS\'), calculate();"/>/50</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()">2008 curve</p>





	</div>


	<div id="calculate2" class="calculate" style="display: none">


			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1SL" min="0" step="1" max="70" onmouseup="slidervalue(\'P1SL\',\'P11SL\'), calculate2();" ontouchend="slidervalue(\'P1SL\',\'P11SL\'), calculate2();"/><input type="number" min="0" max="70" step="1" id="P11SL" value="35" style="width: 40px;" onchange="slidervalue(\'P11SL\',\'P1SL\'), calculate2();"/>/70</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2SL" min="0" step="1" max="70" onmouseup="slidervalue(\'P2SL\',\'P22SL\'), calculate2();" ontouchend="slidervalue(\'P2SL\',\'P22SL\'), calculate2();"/><input type="number" min="0" max="70" step="1" id="P22SL" value="35" style="width: 40px;" onchange="slidervalue(\'P22SL\',\'P2SL\'), calculate2();"/>70</p>
			<p><label>Dossier Score</label></p>
				<p><input type="range" id="ISL" min="0" step="1" max="50"onmouseup="slidervalue(\'ISL\',\'ISL2\'), calculate2();" ontouchend="slidervalue(\'ISL\',\'ISL2\'), calculate2();"/><input type="number" min="0" max="50" step="1" id="ISL2" value="25" style="width: 40px;" onchange="slidervalue(\'ISL2\',\'ISL\'), calculate2();"/>/50</p>

			<p>Choose a score curve</p>
				<p><input style="margin-left: 30px;" type="radio" name="curvesl" id="curve1sl" onclick="calculate2()" /checked>2008 curve</p>





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
$calculator->setBool(true);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
