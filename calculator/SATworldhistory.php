<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT World History";
$keywords="SAT World History, sat world history, SAT world history, SAT History, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATworldhistory.js";
$css = "../css/style.css";
$content = '
	<h2>World History<img src="../Globe.png" alt="World History" ></h2>
<div id="calculator"> 

	<div id="calculate">
	
	
     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "47" max="95" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="95" step="1" id="MC2" value="47" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/95</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "47" max="95" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="95" step="1" id="MC4" value="47" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/95</p>
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


