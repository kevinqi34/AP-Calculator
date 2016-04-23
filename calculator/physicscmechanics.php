<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Physics C Mechanics";
$keywords="AP Mech, AP Physics C Mechanics, Physics C, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/physicscmechanics.js";
$css = "../css/style.css";
$content = '
	<h2>Physics C Mechanics<img src="../images/Mechanics.png" alt="Mech"></h2>
	<div id="calculator">

	<div id="calculate">



			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="35" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="35" step="1" id="MC2" value="18" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/35</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="15"  onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="15" step="1" id="FRQ11" value="7" style="width: 40px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/15</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="15" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="15" step="1" id="FRQ22" value="7" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/15</p>
			<p><label>FRQ3 Score</label></p>
				<p><input type="range" id="FRQ3" min="0" step="1" max="15" onmouseup="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();" ontouchend="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();"/><input type="number" min="0" max="15" step="1" id="FRQ33" value="7" style="width: 40px;" onchange="slidervalue(\'FRQ33\',\'FRQ3\'), calculate();"/>/15</p>
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
