<?php

include('../Template/Swiki.php');

$calculator = new calculator;

$title = "ACT";
$keywords="ACT, ACT Score Calculator, act, American College Test, ACT Math, ACT English, ACT Science, college prep, ACT Reading, Standardized Testing";
$js = "../js/ACT.js";
$css = "../css/styletest.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1101881984&asins=1101881984&linkId=ISZCOJHZMQPRWJYZ&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '

<h2>ACT<img src="../images/test.png" alt="ACT"></h2>

<div id="calculator">



	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>English</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="75" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/75</p>
			<p><label>Math</label></p>
				<p><input type="range" id="DBQ" min="0" step="1" max="60" onmouseup="slidervalue(\'DBQ\',\'DBQ2\'), calculate();" ontouchend="slidervalue(\'DBQ\',\'DBQ2\'), calculate();"/><input type="number" min="0" max="60" step="1" id="DBQ2" value="30" style="width: 40px;" onchange="slidervalue(\'DBQ2\',\'DBQ\'), calculate();"/>/60</p>
			<p><label>Reading</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="40"onmouseup="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();"/><input type="number" min="0" max="40" step="1" id="FRQ12" value="20" style="width: 40px;" onchange="slidervalue(\'FRQ12\',\'FRQ1\'), calculate();"/>/40</p>
			<p><label>Science</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="40"  onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="40" step="1" id="FRQ22" value="20" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/40</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>June 2015 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>December 2012 curve</p>





	</div>
	<div id="results" style="text-align: center;">
		<p>English Score</p>
			<output id="score1"></output>
		<p>Math Score</p>
			<p><output id="score2"></output></p>
		<p>Reading Score</p>
			<p><output id="score3"></output></p>
		<p>Science Score</p>
			<p><output id="score4"></output></p>
		<p>Composite Score</p>
			<p><output id="score5"></output></p>

	</div>

</div>


';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
