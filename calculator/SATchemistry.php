<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT Chemistry";
$keywords="SAT Chemistry, sat chemistry, SAT chemistry, SAT Chem, Chemistry, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATchemistry.js";
$css = "../css/style.css";
$content = '
	<h2>Chemistry<img src="../Science.png" alt="Mech"></h2>
<div id="calculator"> 

	<div id="calculate">
	
	
     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "42" max="85" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="85" step="1" id="MC2" value="42" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/85</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "42" max="85" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="85" step="1" id="MC4" value="42" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/85</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2015 curve</p>
     
   
	</div>
	
	<div id="results" style="text-align: center;">
		<p>Raw Score</p>
			<output id="score1"></output>
		<p>Scaled Score</p>
			<p><output id="score2"></output></p>
	
	</div>
</div>
	
';




$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>

