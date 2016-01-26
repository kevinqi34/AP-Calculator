<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Human Geography";
$keywords="AP Geo, AP Human Geography, AP Human, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/humangeography.js";
$css = "../css/style.css";
$content = '
	<h2>Human Geography<img src="../Globe.png" alt="Globe"></h2>
	<div id="calculator"> 

	<div id="calculate">
	
 	
   
			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="75"  onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/75</p>	
			<p><label>Total FRQ Score (%)</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="100" onmouseup="slidervalue(\'FRQ1\',\'FRQ2\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ2\'), calculate();"/><input type="number" min="0" max="100" step="1" id="FRQ2" value="50" style="width: 50px;" onchange="slidervalue(\'FRQ2\',\'FRQ1\'), calculate();"/>/100</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2001 curve</p>
    
 	
	
					
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




$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
