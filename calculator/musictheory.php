<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Music Theory";
$keywords="AP Music, AP Music Theory, Music Theory, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/musictheory.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438073895&asins=1438073895&linkId=QFC3FL7ABASS5DIF&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Music Theory<img src="../images/Music.png" alt="Music"></h2>
	<div id="calculator">

	<div id="calculate">



			<h3>Enter your scores below</h3>
			<p><label>Aural Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="42" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="42" step="1" id="MC2" value="21" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/42</p>
			<p><label>Non-Aural Multiple Choice Score</label></p>
				<p><input type="range" id="MC3" min="0" step="1" max="33"  onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="33" step="1" id="MC4" value="16" style="width: 40px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/33</p>
			<p><label>Melodic Dictation 1</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ11" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/9</p>
			<p><label>Melodic Dictation 2</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/9</p>
			<p><label>Harmonic Dictation 1</label></p>
				<p><input type="range" id="FRQ3" min="0" step="1" max="24" onmouseup="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();" ontouchend="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();"/><input type="number" min="0" max="24" step="1" id="FRQ33" value="12" style="width: 40px;" onchange="slidervalue(\'FRQ33\',\'FRQ3\'), calculate();"/>/24</p>
			<p><label>Harmonic Dictation 2</label></p>
				<p><input type="range" id="FRQ4" min="0" step="1" max="24"  onmouseup="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();" ontouchend="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();"/><input type="number" min="0" max="24" step="1" id="FRQ44" value="12" style="width: 40px;" onchange="slidervalue(\'FRQ44\',\'FRQ4\'), calculate();"/>/24</p>
			<p><label>Part Writing from Figured Bass</label></p>
				<p><input type="range" id="FRQ5" min="0" step="1" max="25" onmouseup="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();" ontouchend="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();"/><input type="number" min="0" max="25" step="1" id="FRQ55" value="13" style="width: 40px;" onchange="slidervalue(\'FRQ55\',\'FRQ5\'), calculate();"/>/25</p>
			<p><label>Part Writing from Roman Numerals</label></p>
				<p><input type="range" id="FRQ6" min="0" step="1" max="18"onmouseup="slidervalue(\'FRQ6\',\'FRQ66\'), calculate();" ontouchend="slidervalue(\'FRQ6\',\'FRQ66\'), calculate();"/><input type="number" min="0" max="18" step="1" id="FRQ66" value="9" style="width: 40px;" onchange="slidervalue(\'FRQ66\',\'FRQ6\'), calculate();"/>/18</p>
			<p><label>Composition of Bass Line</label></p>
				<p><input type="range" id="FRQ7" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ7\',\'FRQ77\'), calculate();" ontouchend="slidervalue(\'FRQ7\',\'FRQ77\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ77" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ77\',\'FRQ7\'), calculate();"/>/9</p>
			<p><label>Sight Singing 1</label></p>
				<p><input type="range" id="FRQ8" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ8\',\'FRQ88\'), calculate();" ontouchend="slidervalue(\'FRQ8\',\'FRQ88\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ88" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ88\',\'FRQ8\'), calculate();"/>/9</p>
			<p><label>Sight Singing 2</label></p>
				<p><input type="range" id="FRQ9" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ9\',\'FRQ99\'), calculate();" ontouchend="slidervalue(\'FRQ9\',\'FRQ99\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ99" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ99\',\'FRQ9\'), calculate();"/>/9</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>



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
		<p>Aural Subscore</p>
			<p><output id="score5"></output></p>
		<p>Non-Aural Subscore</p>
			<p><output id="score6"></output></p>
	</div>
</div>

';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
