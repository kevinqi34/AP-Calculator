<?php

include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP Biology";
$keywords="AP Bio, AP Biology, Biology Score, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/biology.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438005008&asins=1438005008&linkId=PJIQJUOBP2WD7K5A&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
	<h2>Biology<img src="../images/DNA.jpg" alt="DNA"></h2>

<h2>Version:
<select id="version" onchange="changediv();">
  <option value="Pos2012">Post 2012</option>
  <option value="Pre2012">Pre 2012</option>
 </select>
</h2>


<div id="calculator">

	<div id="calculate" class="calculate">


			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="100" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="100" step="1" id="MC2" value="50" style="width: 50px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/100</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="10" onmouseup="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ11\'), calculate();"/><input type="number" min="0" max="10" step="1" id="FRQ11" value="5" style="width: 50px;" onchange="slidervalue(\'FRQ11\',\'FRQ1\'), calculate();"/>/10</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="10" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="10" step="1" id="FRQ22" value="5" style="width: 50px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/10</p>
			<p><label>FRQ3 Score</label></p>
				<p><input type="range" id="FRQ3" min="0" step="1" max="10" onmouseup="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();" ontouchend="slidervalue(\'FRQ3\',\'FRQ33\'), calculate();"/><input type="number" min="0" max="10" step="1" id="FRQ33" value="5" style="width: 50px;" onchange="slidervalue(\'FRQ33\',\'FRQ3\'), calculate();"/>/10</p>
			<p><label>FRQ4 Score</label></p>
				<p><input type="range" id="FRQ4" min="0" step="1" max="10" onmouseup="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();" ontouchend="slidervalue(\'FRQ4\',\'FRQ44\'), calculate();"/><input type="number" min="0" max="10" step="1" id="FRQ44" value="5" style="width: 50px;" onchange="slidervalue(\'FRQ44\',\'FRQ4\'), calculate();"/>/10</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()">2008 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2002 curve</p>





	</div>


	<div id="calculate2" class="calculate" style="display:none;">

	<h3>Enter your scores below</h3>

		<p><label>Multiple Choice/Grid-In Score</label></p>
				<p><input type="range" id="MC2012" min="0" step="1" max="69" onmouseup="slidervalue(\'MC2012\',\'MC22012\'), calculate2();" ontouchend="slidervalue(\'MC2012\',\'MC22012\'), calculate2();"/><input type="number" min="0" max="69" step="1" id="MC22012" value="35" style="width: 50px;" onchange="slidervalue(\'MC22012\',\'MC2012\'), calculate2();"/>/69</p>
			<p><label>FRQ Total Score</label></p>
				<p><input type="range" id="FRQ2012" min="0" step="1" max="40" onmouseup="slidervalue(\'FRQ2012\',\'FRQ22012\'), calculate2();" ontouchend="slidervalue(\'FRQ2012\',\'FRQ22012\'), calculate2();"/><input type="number" min="0" max="40" step="1" id="FRQ22012" value="20" style="width: 50px;" onchange="slidervalue(\'FRQ22012\',\'FRQ2012\'), calculate2();"/>/40</p>
	<p>Choose a score curve</p>
			<p><input style="margin-left: 30px;" type="radio" name="curve" id="curve2012" onclick="calculate()" /checked>2013 curve</p>



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
