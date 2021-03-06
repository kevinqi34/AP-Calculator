<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Spanish Literature";
$keywords="AP Spanish, AP Spanish Literature, Spanish Literature, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/spanishliterature.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=0804126240&asins=0804126240&linkId=U67GSUDF2VN733XR&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Spanish Literature<img src="../images/Spain.jpeg" alt="Spanish"></h2>
<div id="calculator">


	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="65" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="65" step="1" id="MC2" value="32" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/65</p>
			<p><label>Q1 Content Score</label></p>
				<p><input type="range" id="QC1" min="0" step="1" max="9"  onmouseup="slidervalue(\'QC1\',\'QC11\'), calculate();" ontouchend="slidervalue(\'QC1\',\'QC11\'), calculate();"/><input type="number" min="0" max="9" step="1" id="QC11" value="5" style="width: 50px;" onchange="slidervalue(\'QC11\',\'QC1\'), calculate();"/>/9</p>
			<p><label>Q1 Language Score</label></p>
				<p><input type="range" id="QL1" min="0" step="1" max="5" onmouseup="slidervalue(\'QL1\',\'QL11\'), calculate();" ontouchend="slidervalue(\'QL1\',\'QL11\'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL11" value="3" style="width: 50px;" onchange="slidervalue(\'QL11\',\'QL1\'), calculate();"/>/5</p>
			<p><label>Q2 Content Score</label></p>
				<p><input type="range" id="QC2" min="0" step="1" max="9"  onmouseup="slidervalue(\'QC2\',\'QC22\'), calculate();" ontouchend="slidervalue(\'QC2\',\'QC22\'), calculate();"/><input type="number" min="0" max="9" step="1" id="QC22" value="5" style="width: 50px;" onchange="slidervalue(\'QC22\',\'QC2\'), calculate();"/>/9</p>
			<p><label>Q2 Language Score</label></p>
				<p><input type="range" id="QL2" min="0" step="1" max="5" onmouseup="slidervalue(\'QL2\',\'QL22\'), calculate();" ontouchend="slidervalue(\'QL2\',\'QL22\'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL22" value="3" style="width: 50px;" onchange="slidervalue(\'QL22\',\'QL2\'), calculate();"/>/5</p>
			<p><label>Q3 Content Total Score</label></p>
				<p><input type="range" id="QC3" min="0" step="1" max="10"  onmouseup="slidervalue(\'QC3\',\'QC33\'), calculate();" ontouchend="slidervalue(\'QC3\',\'QC33\'), calculate();"/><input type="number" min="0" max="10" step="1" id="QC33" value="5" style="width: 50px;" onchange="slidervalue(\'QC33\',\'QC3\'), calculate();"/>/10</p>
			<p><label>Q3 Language Score</label></p>
				<p><input type="range" id="QL3" min="0" step="1" max="5" onmouseup="slidervalue(\'QL3\',\'QL33\'), calculate();" ontouchend="slidervalue(\'QL3\',\'QL33\'), calculate();"/><input type="number" min="0" max="5" step="1" id="QL33" value="3" style="width: 50px;" onchange="slidervalue(\'QL33\',\'QL3\'), calculate();"/>/5</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2003 curve</p>






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
