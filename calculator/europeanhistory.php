<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP European History";
$keywords="AP Euro, AP European History, European History, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/europeanhistory.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0804126194&asins=0804126194&linkId=IX4CEJQ7S3FKPRE4&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>European History<img src="../images/History.png" alt="History"></h2>

<div id="calculator">



	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="80" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="80" step="1" id="MC2" value="40" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/80</p>
			<p><label>DBQ Score</label></p>
				<p><input type="range" id="DBQ" min="0" step="1" max="9" onmouseup="slidervalue(\'DBQ\',\'DBQ2\'), calculate();" ontouchend="slidervalue(\'DBQ\',\'DBQ2\'), calculate();"/><input type="number" min="0" max="9" step="1" id="DBQ2" value="5" style="width: 40px;" onchange="slidervalue(\'DBQ2\',\'DBQ\'), calculate();"/>/9</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="9"onmouseup="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ12" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ12\',\'FRQ1\'), calculate();"/>/9</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="9"  onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/9</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2009 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2004 curve</p>





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
