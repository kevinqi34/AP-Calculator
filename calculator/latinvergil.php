<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Latin Vergil";
$keywords="AP Latin Vergil, AP Latin Vergil Language, Latin Language, Latin, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/latinvergil.js";
$css = "../css/style.css";
$content = '
	<h2>Latin Vergil<img src="../images/italy.png" alt="Italy"></h2>
<div id="calculator">


	<div id="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="49" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="49" step="1" id="MC2" value="24" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/49</p>
			<p><label>Question 1 Score</label></p>
				<p><input type="range" id="Q1" min="0" step="1" max="9"  onmouseup="slidervalue(\'Q1\',\'Q11\'), calculate();" ontouchend="slidervalue(\'Q1\',\'Q11\'), calculate();"/><input type="number" min="0" max="9" step="1" id="Q11" value="5" style="width: 50px;" onchange="slidervalue(\'Q11\',\'Q1\'), calculate();"/>/9</p>
			<p><label>Question 2 Score</label></p>
				<p><input type="range" id="Q2" min="0" step="1" max="9" onmouseup="slidervalue(\'Q2\',\'Q22\'), calculate();" ontouchend="slidervalue(\'Q2\',\'Q22\'), calculate();"/><input type="number" min="0" max="9" step="1" id="Q22" value="5" style="width: 50px;" onchange="slidervalue(\'Q22\',\'Q2\'), calculate();"/>/9</p>
			<p><label>Question 3 Score</label></p>
				<p><input type="range" id="Q3" min="0" step="1" max="6" onmouseup="slidervalue(\'Q3\',\'Q33\'), calculate();" ontouchend="slidervalue(\'Q3\',\'Q33\'), calculate();"/><input type="number" min="0" max="6" step="1" id="Q33" value="3" style="width: 50px;" onchange="slidervalue(\'Q33\',\'Q3\'), calculate();"/>/6</p>
			<p><label>Question 4 Score</label></p>
				<p><input type="range" id="Q4" min="0" step="1" max="6" onmouseup="slidervalue(\'Q4\',\'Q44\'), calculate();" ontouchend="slidervalue(\'Q4\',\'Q44\'), calculate();"/><input type="number" min="0" max="6" step="1" id="Q44" value="3" style="width: 50px;" onchange="slidervalue(\'Q44\',\'Q4\'), calculate();"/>/6</p>
			<p><label>Question 5 Score</label></p>
				<p><input type="range" id="Q5" min="0" step="1" max="6" onmouseup="slidervalue(\'Q5\',\'Q55\'), calculate();" ontouchend="slidervalue(\'Q5\',\'Q55\'), calculate();"/><input type="number" min="0" max="6" step="1" id="Q55" value="3" style="width: 50px;" onchange="slidervalue(\'Q55\',\'Q5\'), calculate();"/>/6</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2005 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>1999 curve</p>






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
