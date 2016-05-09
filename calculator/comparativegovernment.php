<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Comparative Government";
$keywords="AP Comparative, AP Comp Gov, Comparative Government, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/comparativegovernment.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438006152&asins=1438006152&linkId=6LVIZIZG7WLVT7LJ&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Comparative Government<img src="../images/Government.jpg" alt="Gov" style="width:25px; height: 25px; margin-top: 0px;"></h2>
<div id="calculator">

	<div id="calculate">


 		<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="55"  onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="55" step="1" id="MC2" value="28" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/55</p>
			<p><label>Short Answer 1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="3" onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ11" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/3</p>
			<p><label>Short Answer 2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="3" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ22" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/3</p>
			<p><label>Short Answer 3 Score</label></p>
				<p><input type="range" id="FRQ3" min="0" step="1" max="3" onmouseup="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();" ontouchend="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ33" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ33\',\'FRQ3\'), calculate();"/>/3</p>
			<p><label>Short Answer 4 Score</label></p>
				<p><input type="range" id="FRQ4" min="0" step="1" max="3" onmouseup="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();" ontouchend="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ44" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ44\',\'FRQ4\'), calculate();"/>/3</p>
			<p><label>Short Answer 5 Score</label></p>
				<p><input type="range" id="FRQ5" min="0" step="1" max="3" onmouseup="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();" ontouchend="slidervalue(\'FRQ5\',\'FRQ55\'), calculate();"/><input type="number" min="0" max="3" step="1" id="FRQ55" value="2" style="width: 40px;" onchange="slidervalue(\'FRQ55\',\'FRQ5\'), calculate();"/>/3</p>
			<p><label>Conceptual Question Score</label></p>
				<p><input type="range" id="CRQ1" min="0" step="1" max="5" onmouseup="slidervalue(\'CRQ1\',\'CRQ11\'), calculate();" ontouchend="slidervalue(\'CRQ1\',\'CRQ11\'), calculate();"/><input type="number" min="0" max="5" step="1" id="CRQ11" value="2" style="width: 40px;" onchange="slidervalue(\'CRQ11\',\'CRQ1\'), calculate();"/>/5</p>
			<p><label>Country Specific Question 1</label></p>
				<p><input type="range" id="CORQ1" min="0" step="1" max="7" onmouseup="slidervalue(\'CORQ1\',\'CORQ11\'), calculate();"  ontouchend="slidervalue(\'CORQ1\',\'CORQ11\'), calculate();"/><input type="number" min="0" max="7" step="1" id="CORQ11" value="3" style="width: 40px;" onchange="slidervalue(\'CORQ11\',\'CORQ1\'), calculate();"/>/7</p>
			<p><label>Country Specific Question 2</label></p>
				<p><input type="range" id="CORQ2" min="0" step="1" max="7"  onmouseup="slidervalue(\'CORQ2\',\'CORQ22\'), calculate();" ontouchend="slidervalue(\'CORQ2\',\'CORQ22\'), calculate();"/><input type="number" min="0" max="7" step="1" id="CORQ22" value="3" style="width: 40px;" onchange="slidervalue(\'CORQ22\',\'CORQ2\'), calculate();"/>/7</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>1999 curve</p>


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
