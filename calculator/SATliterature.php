<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT Literature";
$keywords="SAT Literature, sat literature, SAT literature, SAT Lit, SAT Subject Tests, Subject tests, SAT tests, SAT testing, subject testing";
$js = "../js/SATliterature.js";
$css = "../css/style.css";
$content = '

<h2>Literature<img src="../images/Language.png" alt="Language" ></h2>
<div id="calculator">

	<div id="calculate">


     	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Incorrect</label></p>
				<p><input type="range" id="MC" min="0" step="1" value = "30" max="60" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="60" step="1" id="MC2" value="30" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/60</p>
			<p><label>Multiple Choice Skipped</label></p>
				<p><input type="range" id="MC3" min="0" step="1" value = "30" max="60" onmouseup="slidervalue(\'MC3\',\'MC4\'), calculate();" ontouchend="slidervalue(\'MC3\',\'MC4\'), calculate();"/><input type="number" min="0" max="60" step="1" id="MC4" value="30" style="width: 50px;" onchange="slidervalue(\'MC4\',\'MC3\'), calculate();"/>/60</p>
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
