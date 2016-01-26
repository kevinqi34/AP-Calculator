<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT US History";
$keywords="SAT US History, sat us history, SAT USHis, SAT History, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATushistory.js";
$css = "../css/style.css";
$content = '
	<h2>US History<img src="../USAHis.jpg" alt="US History" ></h2>
<div id="calculator"> 

	<div id="calculate">
	
	
     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "45" max="90" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="90" step="1" id="MC2" value="45" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/90</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "45" max="90" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="90" step="1" id="MC4" value="45" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/90</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2014 curve</p>
     
   
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
