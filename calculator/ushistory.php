
<?php
include('../Template/Swiki.php');

$calculator = new calculator;

$title = "AP U.S. History";
$keywords="APUSH, AP US History, U.S History, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep";
$js = "../js/ushistory.js";
$css = "../css/style.css";
$affiliate = '<iframe style="width:120px;height:240px;margin-left:calc(50% - 60px);margin-top:150px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ac&ref=tf_til&ad_type=product_link&tracking_id=spere-10-20&marketplace=amazon&region=US&placement=1438002696&asins=1438002696&linkId=V5P3P2GZMQGGMFAZ&show_border=true&link_opens_in_new_window=true"></iframe>';

$content = '
	<h2>US History<img src="../images/USAHis.jpg" alt="USHis"></h2>

<h2>Version:
<select id="version" onchange="changediv();">
  <option value="Pos2012">Post 2014</option>
  <option value="Pre2012">Pre 2014</option>
 </select>
</h2>



<div id="calculator" >






	<div id="calculate" class="calculate">



			<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="80" onmouseup="slidervalue(\'MC\',\'MC2\'), calculate();" ontouchend="slidervalue(\'MC\',\'MC2\'), calculate();"/><input type="number" min="0" max="80" step="1" id="MC2" value="40" style="width: 40px;" onchange="slidervalue(\'MC2\',\'MC\'), calculate();"/>/80</p>
			<p><label>DBQ Score</label></p>
				<p><input type="range" id="DBQ" min="0" step="1" max="9"  onmouseup="slidervalue(\'DBQ\',\'DBQ2\'), calculate();" ontouchend="slidervalue(\'DBQ\',\'DBQ2\'), calculate();"/><input type="number" min="0" max="9" step="1" id="DBQ2" value="5" style="width: 40px;" onchange="slidervalue(\'DBQ2\',\'DBQ\'), calculate();"/>/9</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="9"  onmouseup="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();" ontouchend="slidervalue(\'FRQ1\',\'FRQ12\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ12" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ12\',\'FRQ1\'), calculate();"/>/9</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();" ontouchend="slidervalue(\'FRQ2\',\'FRQ22\'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5" style="width: 40px;" onchange="slidervalue(\'FRQ22\',\'FRQ2\'), calculate();"/>/9</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()">2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2001 curve</p>



	</div>



<div id="calculate2" class="calculate" style="display:none;">

	<h3>Enter your scores below</h3>

		<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC2012" min="0" step="1" max="55" onmouseup="slidervalue(\'MC2012\',\'MC22012\'), calculate2();" ontouchend="slidervalue(\'MC2012\',\'MC22012\'), calculate2();"/><input type="number" min="0" max="55" step="1" id="MC22012" value="28" style="width: 50px;" onchange="slidervalue(\'MC22012\',\'MC2012\'), calculate2();"/>/55</p>
			<p><label>Short Answer Score</label></p>
				<p><input type="range" id="SRQ2012" min="0" step="1" max="12" onmouseup="slidervalue(\'SRQ2012\',\'SRQ22012\'), calculate2();" ontouchend="slidervalue(\'SRQ2012\',\'SRQ22012\'), calculate2();"/><input type="number" min="0" max="12" step="1" id="SRQ22012" value="4" style="width: 50px;" onchange="slidervalue(\'SRQ22012\',\'SRQ2012\'), calculate2();"/>/12</p>
			<p><label>DBQ Score</label></p>
				<p><input type="range" id="DBQ2012" min="0" step="1" max="7"  onmouseup="slidervalue(\'DBQ2012\',\'DBQ22012\'), calculate2();" ontouchend="slidervalue(\'DBQ2012\',\'DBQ22012\'), calculate2();"/><input type="number" min="0" max="7" step="1" id="DBQ22012" value="4" style="width: 40px;" onchange="slidervalue(\'DBQ22012\',\'DBQ2012\'), calculate2();"/>/7</p>
			<p><label>Long Essay Score</label></p>
				<p><input type="range" id="LE2012" min="0" step="1" max="6"  onmouseup="slidervalue(\'LE2012\',\'LE22012\'), calculate2();" ontouchend="slidervalue(\'LE2012\',\'LE22012\'), calculate2();"/><input type="number" min="0" max="6" step="1" id="LE22012" value="3" style="width: 40px;" onchange="slidervalue(\'LE22012\',\'LE2012\'), calculate2();"/>/6</p>
			<p>Choose a score curve</p>
			<p><input style="margin-left: 30px;" type="radio" name="curve" id="curve2012" onclick="calculate()" /checked>2015 curve</p>



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
