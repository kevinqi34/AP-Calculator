<?php

include('../Template/Swiki.php');

$calculator = new calculator;



$title = "IB TOK and Extended Essay";
$keywords="Theory of Knowledge, TOK, Extended Essay, IB score, IB Calculator, IB tests, college prep, IB courses, IB Exam, IB prep";
$js = "../js/tok.js";
$css = "../css/styleib.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=110761211X&asins=110761211X&linkId=VPTVNC2LMEVITW5Z&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
<h2>Theory of Knowledge and Extended Essay<img src="../images/essay.png" alt="essay"></h2>

<div id="calculator">



	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><b>Theory of Knowledge</b></p>
			<p><label>Presentation Score</label></p>
				<p><input type="range" id="PS" min="0" step="1" max="20" onmouseup="slidervalue(\'PS\',\'PS2\'), calculate();" ontouchend="slidervalue(\'PS\',\'PS2\'), calculate();"/><input type="number" min="0" max="20" step="1" id="PS2" value="10" style="width: 40px;" onchange="slidervalue(\'PS2\',\'PS\'), calculate();"/>/20</p>
			<p><label>Essay Score</label></p>
				<p><input type="range" id="ES" min="0" step="1" max="40" onmouseup="slidervalue(\'ES\',\'ES2\'), calculate();" ontouchend="slidervalue(\'ES\',\'ES2\'), calculate();"/><input type="number" min="0" max="40" step="1" id="ES2" value="20" style="width: 40px;" onchange="slidervalue(\'ES2\',\'ES\'), calculate();"/>/40</p>
			<p><b>Extended Essay</b></p>
			<p><label>Essay Score</label></p>
				<p><input type="range" id="EES" min="0" step="1" max="36"onmouseup="slidervalue(\'EES\',\'EES2\'), calculate();" ontouchend="slidervalue(\'EES\',\'EES2\'), calculate();"/><input type="number" min="0" max="36" step="1" id="EES2" value="18" style="width: 40px;" onchange="slidervalue(\'EES2\',\'EES\'), calculate();"/>/36</p>

			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve</p>





	</div>
	<div id="results" style="text-align: center;">
		<p>Theory of Knowledge Score</p>
			<output id="score1"></output>
		<p>Theory of Knowledge Grade</p>
			<p><output id="score2"></output></p>
		<p>Extended Essay Score</p>
			<p><output id="score3"></output></p>
		<p>Extended Essay Grade</p>
			<p><output id="score4"></output></p>

	</div>

</div>


';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
