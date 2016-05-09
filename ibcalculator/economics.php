<?php

include('../Template/Swiki.php');

$calculator = new calculator;



$title = "IB Economics HL/SL";
$keywords="IB Economics, Economics, Economics SL, Economics HL, IB Economics, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$js = "../js/ibeconomics.js";
$css = "../css/styleib.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0198390017&asins=0198390017&linkId=JVPX2LSXAGHYTTJA&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
<h2>Economics HL/SL<img src="../images/Money.png" alt="Money"></h2>

<div id="calculator">

		<div class="calculate">
			<h3>Enter your scores below</h3>
			<p>Choose a strand</p>
				<p><input onchange="changediv();" type="radio" name="strand" id="sl" onclick="calculate()" /checked>SL<input onchange="changediv();" style="margin-left: 30px;" type="radio" name="strand" id="hl" onclick="calculate()">HL</p>

		</div>

	<div id="calculate">




			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1" min="0" step="1" max="25" onmouseup="slidervalue(\'P1\',\'P11\'), calculate();" ontouchend="slidervalue(\'P1\',\'P11\'), calculate();"/><input type="number" min="0" max="30" step="1" id="P11" value="12" style="width: 40px;" onchange="slidervalue(\'P11\',\'P1\'), calculate();"/>/25</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2" min="0" step="1" max="30" onmouseup="slidervalue(\'P2\',\'P22\'), calculate();" ontouchend="slidervalue(\'P2\',\'P22\'), calculate();"/><input type="number" min="0" max="30" step="1" id="P22" value="15" style="width: 40px;" onchange="slidervalue(\'P22\',\'P2\'), calculate();"/>/30</p>
			<p><label>Paper 3 Score</label></p>
				<p><input type="range" id="P3" min="0" step="1" max="60" onmouseup="slidervalue(\'P3\',\'P33\'), calculate();" ontouchend="slidervalue(\'P3\',\'P33\'), calculate();"/><input type="number" min="0" max="60" step="1" id="P33" value="30" style="width: 40px;" onchange="slidervalue(\'P33\',\'P3\'), calculate();"/>/60</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="IS" min="0" step="1" max="20"onmouseup="slidervalue(\'IS\',\'IS2\'), calculate();" ontouchend="slidervalue(\'IS\',\'IS2\'), calculate();"/><input type="number" min="0" max="20" step="1" id="IS2" value="10" style="width: 40px;" onchange="slidervalue(\'IS2\',\'IS\'), calculate();"/>/20</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()">2008 curve</p>





	</div>


	<div id="calculate2" class="calculate" style="display: none">


			<p><label>Paper 1 Score</label></p>
				<p><input type="range" id="P1SL" min="0" step="1" max="25" onmouseup="slidervalue(\'P1SL\',\'P11SL\'), calculate2();" ontouchend="slidervalue(\'P1SL\',\'P11SL\'), calculate2();"/><input type="number" min="0" max="25" step="1" id="P11SL" value="12" style="width: 40px;" onchange="slidervalue(\'P11SL\',\'P1SL\'), calculate2();"/>/25</p>
			<p><label>Paper 2 Score</label></p>
				<p><input type="range" id="P2SL" min="0" step="1" max="60" onmouseup="slidervalue(\'P2SL\',\'P22SL\'), calculate2();" ontouchend="slidervalue(\'P2SL\',\'P22SL\'), calculate2();"/><input type="number" min="0" max="60" step="1" id="P22SL" value="30" style="width: 40px;" onchange="slidervalue(\'P22SL\',\'P2SL\'), calculate2();"/>/60</p>
			<p><label>Internal Score</label></p>
				<p><input type="range" id="ISL" min="0" step="1" max="20"onmouseup="slidervalue(\'ISL\',\'ISL2\'), calculate2();" ontouchend="slidervalue(\'ISL\',\'ISL2\'), calculate2();"/><input type="number" min="0" max="20" step="1" id="ISL2" value="10" style="width: 40px;" onchange="slidervalue(\'ISL2\',\'ISL\'), calculate2();"/>/20</p>

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
$calculator->setBool();
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
