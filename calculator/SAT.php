<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "SAT";
$keywords="SAT, sat, Scholastic Assessment Test, SAT Math, SAT Writing, SAT Reading, college prep, SAT Essay, Standardized Testing";
$js = "../js/SAT.js";
$css = "../css/styletest.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1457304309&asins=1457304309&linkId=226CYCLVF6SWVHQR&show_border=true&link_opens_in_new_window=true"></iframe>';
$content = '
		<h2>SAT<img src="../images/test.png" alt="SAT"></h2>


	<h2>Version:
<select id="version" onchange="changediv();">
  <option value="Pos2012">New (Post 2014)</option>
  <option value="Pre2012">Old</option>
 </select>
</h2>


<div id="calculator">



	<div id="calculate">


			<h3>Enter your raw scores below</h3>
			<p><label>Reading</label></p>
				<p><input type="range" id="MC" min="10" step="1" max="67" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="10" max="67" step="1" id="MC2" value="39" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/67</p>
			<p><label>Math</label></p>
				<p><input type="range" id="DBQ" min="10" step="1" max="54" onmouseup="slidervalue(\'DBQ\',\'DBQ2\'), calculate();" ontouchend="slidervalue(\'DBQ\',\'DBQ2\'), calculate();"/><input type="number" min="10" max="54" step="1" id="DBQ2" value="32" style="width: 40px;" onchange="slidervalue(\'DBQ2\',\'DBQ\'), calculate();"/>/54</p>
			<p><label>Writing(Assuming Essay Score > 9)</label></p>
				<p><input type="range" id="FRQ1" min="10" step="1" max="49"onmouseup="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();"/><input type="number" min="10" max="49" step="1" id="FRQ12" value="29" style="width: 40px;" onchange="slidervalue(\'FRQ12\',\'FRQ1\'), calculate();"/>/49</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>May 2011 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>January 2010 curve</p>





	</div>


	<div id="calculate2" class="calculate" style="display:none;">
			<h3>Enter your raw scores below</h3>
			<p><label>Reading</label></p>
				<p><input type="range" id="MCN" min="0" step="1" max="52" onmouseup="slidervalue(\'MCN\',\'MC2N\'), calculate2();" ontouchend="slidervalue(\'MCN\',\'MC2N\'), calculate2();"/><input type="number" min="0" max="52" step="1" id="MC2N" value="26" style="width: 40px;" onchange="slidervalue(\'MC2N\',\'MCN\'), calculate2();"/>/52</p>
			<p><label>Math</label></p>
				<p><input type="range" id="DBQN" min="0" step="1" max="58" onmouseup="slidervalue(\'DBQN\',\'DBQ2N\'), calculate2();" ontouchend="slidervalue(\'DBQN\',\'DBQ2N\'), calculate2();"/><input type="number" min="0" max="58" step="1" id="DBQ2N" value="29" style="width: 40px;" onchange="slidervalue(\'DBQ2N\',\'DBQN\'), calculate2();"/>/58</p>
			<p><label>Writing</label></p>
				<p><input type="range" id="FRQ1N" min="0" step="1" max="44"onmouseup="slidervalue(\'FRQ1N\',\'FRQ12N\'), calculate2();" ontouchend="slidervalue(\'FRQ1N\',\'FRQ12N\'), calculate2();"/><input type="number" min="0" max="44" step="1" id="FRQ12N" value="22" style="width: 40px;" onchange="slidervalue(\'FRQ12N\',\'FRQ1N\'), calculate2();"/>/44</p>
			<p>Choose a score curve</p>
				<p><input style="margin-left: 30px;"  type="radio" name="curve" id="curve2012" onclick="calculate2()" checked/>2015 curve</p>



	</div>






	<div id="results" style="text-align: center;">
		<p id="p1">Reading Score</p><p id="p2">Reading + Writing Score</p>
			<output id="score1"></output>
		<p>Math Score</p>
			<p><output id="score2"></output></p>

		<p id="score3p">Writing Score</p>
			<p><output id="score3"></output></p>
		<p>Total Score</p>
			<p><output id="score4"></output></p>

	</div>

</div>

';



$calculator->setAffiliate($affiliate);
$calculator->setCalculator($title, $keywords, $content, $js, $css);
$calculator->createCalculator();


?>
