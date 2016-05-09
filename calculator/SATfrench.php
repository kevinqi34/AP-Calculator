<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT French";
$keywords="SAT French, sat french, SAT french, French, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATfrench.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0804125708&asins=0804125708&linkId=QDLVQ5SVR2MM67SJ&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>French<img src="../images/French.gif" alt="France" ></h2>
<div id="calculator">

	<div id="calculate">


     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "42" max="85" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="85" step="1" id="MC2" value="42" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/85</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "42" max="85" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="85" step="1" id="MC4" value="42" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/85</p>
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
