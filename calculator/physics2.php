<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Physics 2";
$keywords="AP Physics 2, AP Physics 2, Physics 2, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/physics2.js";
$css = "../css/style.css";
$content = '
	<h2>Physics 2<img src="../Physics.png" alt="Physics"></h2>
<div id="calculator">  


	<div id="calculate">
	
		
			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="50" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="100" step="1" id="MC2" value="50" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/100</p>
			<p><label>Short Free Response Score</label></p>
				<p><input type="range" id="SFRQ" min="0" step="1" max="20"  onmouseup="slidervalue(\'SFRQ\',\'SFRQ1\'), calculate();" ontouchend="slidervalue(\'SFRQ\',\'SFRQ1\'), calculate();"/><input type="number" min="0" max="20" step="1" id="SFRQ1" value="10" style="width: 50px;" onchange="slidervalue(\'SFRQ1\',\'SFRQ\'), calculate();"/>/20</p>
			<p><label>Long Free Response Score</label></p>
				<p><input type="range" id="LFRQ" min="0" step="1" max="24" onmouseup="slidervalue(\'LFRQ\',\'LFRQ1\'), calculate();" ontouchend="slidervalue(\'LFRQ\',\'LFRQ1\'), calculate();"/><input type="number" min="0" max="24" step="1" id="LFRQ1" value="12" style="width: 50px;" onchange="slidervalue(\'LFRQ1\',\'LFRQ\'), calculate();"/>/24</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2015 curve</p>
	  
   
	
			
		
				
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
