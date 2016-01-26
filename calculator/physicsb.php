<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Physics B";
$keywords="AP Physics B, Physics B, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/physicsb.js";
$css = "../css/style.css";
$content = '
	<h2>Physics B<img src="../Physics.png" alt="Physics"></h2>
<div id="calculator"> 

	<div id="calculate">
		
     		<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="70"  onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="70" step="1" id="MC2" value="35" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/70</p>
			<p><label>Total FRQ Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="80"  onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="80" step="1" id="FRQ11" value="40" style="width: 40px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/80</p>
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




$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
