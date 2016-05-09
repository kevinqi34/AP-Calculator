<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Spanish Language";
$keywords="AP Spanish, AP Spanish Language, Spanish Language, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/spanishlanguage.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0804126240&asins=0804126240&linkId=U67GSUDF2VN733XR&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Spanish Language<img src="../images/Spain.jpeg" alt="Spain"></h2>
<div id="calculator">


	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Listening Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="34" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="34" step="1" id="MC2" value="17" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/34</p>
			<p><label>Reading Multiple Choice Score</label></p>
				<p><input type="range" id="MC3" min="0" step="1" max="41" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="41" step="1" id="MC4" value="20" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/41</p>
			<p><label>Paragraph Completion</label></p>
				<p><input type="range" id="PC" min="0" step="1" max="20" onmouseup="slidervalue(\'PC\',\'PC2\'), calculate();" ontouchend="slidervalue(\'PC\',\'PC2\'), calculate();"/><input type="number" min="0" max="20" step="1" id="PC2" value="10" style="width: 50px;" onchange="slidervalue(\'PC2\',\'PC\'), calculate();"/>/20</p>
			<p><label>Writing Interpersonal</label></p>
				<p><input type="range" id="WI" min="0" step="1" max="5"  onmouseup="slidervalue(\'WI\',\'WI2\'), calculate();" ontouchend="slidervalue(\'WI\',\'WI2\'), calculate();"/><input type="number" min="0" max="5" step="1" id="WI2" value="3" style="width: 50px;" onchange="slidervalue(\'WI2\',\'WI\'), calculate();"/>/5</p>
			<p><label>Writing Presentational</label></p>
				<p><input type="range" id="WP" min="0" step="1" max="5" onmouseup="slidervalue(\'WP\',\'WP2\'), calculate();" ontouchend="slidervalue(\'WP\',\'WP2\'), calculate();"/><input type="number" min="0" max="5" step="1" id="WP2" value="3" style="width: 50px;" onchange="slidervalue(\'WP2\',\'WP\'), calculate();"/>/5</p>
			<p><label>Speaking Interpersonal</label></p>
				<p><input type="range" id="SI" min="0" step="1" max="5"  onmouseup="slidervalue(\'SI\',\'SI2\'), calculate();" ontouchend="slidervalue(\'SI\',\'SI2\'), calculate();"/><input type="number" min="0" max="5" step="1" id="SI2" value="3" style="width: 50px;" onchange="slidervalue(\'SI2\',\'SI\'), calculate();"/>/5</p>
			<p><label>Speaking Presentational</label></p>
				<p><input type="range" id="SP" min="0" step="1" max="5" onmouseup="slidervalue(\'SP\',\'SP2\'), calculate();" ontouchend="slidervalue(\'SP\',\'SP2\'), calculate();"/><input type="number" min="0" max="5" step="1" id="SP2" value="3" style="width: 50px;" onchange="slidervalue(\'SP2\',\'SP\'), calculate();"/>/5</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2007 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>






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
