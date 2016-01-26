<!DOCTYPE HTML>
<?php
  
  session_start();
  
  ?>
<html lang="en">
<head>
<title>AP U.S. History</title>
<meta charset="UTF-8" />
<meta name="keywords" content="APUSH, AP US History, U.S History, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep">
<meta http-equiv="Cache-control: max-age = 3600" content="public">
<script type="text/javascript">
//![CDATA[
/*

KKKKKKKKK    KKKKKKK     QQQQQQQQQ     IIIIIIIIII
K:::::::K    K:::::K   QQ:::::::::QQ   I::::::::I
K:::::::K    K:::::K QQ:::::::::::::QQ I::::::::I
K:::::::K   K::::::KQ:::::::QQQ:::::::QII::::::II
KK::::::K  K:::::KKKQ::::::O   Q::::::Q  I::::I  
  K:::::K K:::::K   Q:::::O     Q:::::Q  I::::I  
  K::::::K:::::K    Q:::::O     Q:::::Q  I::::I  
  K:::::::::::K     Q:::::O     Q:::::Q  I::::I  
  K:::::::::::K     Q:::::O     Q:::::Q  I::::I  
  K::::::K:::::K    Q:::::O     Q:::::Q  I::::I  
  K:::::K K:::::K   Q:::::O  QQQQ:::::Q  I::::I  
KK::::::K  K:::::KKKQ::::::O Q::::::::Q  I::::I  
K:::::::K   K::::::KQ:::::::QQ::::::::QII::::::II
K:::::::K    K:::::K QQ::::::::::::::Q I::::::::I
K:::::::K    K:::::K   QQ:::::::::::Q  I::::::::I
KKKKKKKKK    KKKKKKK     QQQQQQQQ::::QQIIIIIIIIII
                                 Q:::::Q         
                                  QQQQQQ     



Have skills? Apply at http://www.spere.io/careers ... 

*/
//]]>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61741997-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" href="../favicon.ico"/>
<script src="../js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="../js/ushistory.js"></script>
<script type="text/javascript" src="../js/calculator.js"></script>
<script type="text/javascript" src="../js/multi.js"></script>
</head>


<body>

<div id="navbar">
 <div id="wrapper">
 
 <a href="../index.php"><img src="../logo.png" alt="Logo"></a>


 <?php if ($_SESSION['uid'] ) { 
	                if ($_SESSION['pid']) {
	                   echo '<a href="">' . $_SESSION["uid"] . '</a>';
		                echo '<a id= "signup" href="../usr/logout.php">Log off</a>' ; 
	                    }  else {
	         			      echo '<a href="../usr/profile.php">Profile</a>';
							      echo '<a id="signup" href="../usr/logout.php" >Log off</a>' ; 
	                    } 	     
		     
		       }	else {
	           echo '<a href="../usr/signup.php">Sign up</a>';
	           echo '<a href="../usr/login.php">Log in</a>';
	          
	           }	 
           ?> 
 
 
 </div>
</div>





<div id="main">

<div id="left">

<div id="navigationbuttons">

<h2>Jump to</h2>

<a href="#">
<div class="button">

<p>Forum</p>


</div>
</a>


<a href="#">
<div class="button">

<p>Course Info</p>


</div>
</a>


<a href="../calculator.php">
<div class="button">

<p>Calculators and Tools</p>


</div>
</a>



</div>



<div id="adblockleft">











</div>











</div>

<div id="adblocktop">






</div>
<div id="home">



<h2>US History<img src="../USAHis.jpg" alt="USHis"></h2>

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
				<p><input type="range" id="MC" min="0" step="1" max="80" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="80" step="1" id="MC2" value="40" style="width: 40px;" onchange="slidervalue('MC2','MC'), calculate();"/>/80</p>
			<p><label>DBQ Score</label></p>
				<p><input type="range" id="DBQ" min="0" step="1" max="9"  onmouseup="slidervalue('DBQ','DBQ2'), calculate();" ontouchend="slidervalue('DBQ','DBQ2'), calculate();"/><input type="number" min="0" max="9" step="1" id="DBQ2" value="5" style="width: 40px;" onchange="slidervalue('DBQ2','DBQ'), calculate();"/>/9</p>
			<p><label>FRQ1 Score</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="9"  onmouseup="slidervalue('FRQ1','FRQ12'), calculate();" ontouchend="slidervalue('FRQ1','FRQ12'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ12" value="5" style="width: 40px;" onchange="slidervalue('FRQ12','FRQ1'), calculate();"/>/9</p>
			<p><label>FRQ2 Score</label></p>
				<p><input type="range" id="FRQ2" min="0" step="1" max="9" onmouseup="slidervalue('FRQ2','FRQ22'), calculate();" ontouchend="slidervalue('FRQ2','FRQ22'), calculate();"/><input type="number" min="0" max="9" step="1" id="FRQ22" value="5" style="width: 40px;" onchange="slidervalue('FRQ22','FRQ2'), calculate();"/>/9</p>
			<p>Choose a score curve</p>
				<p><input type="radio" name="curve" id="curve1" onclick="calculate()">2006 curve<input type="radio" name="curve" id="curve2" onclick="calculate()"/>2001 curve</p>

     
  
	</div>



<div id="calculate2" class="calculate" style="display:none;">
	
	<h3>Enter your scores below</h3>
	
		<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC2012" min="0" step="1" max="55" onmouseup="slidervalue('MC2012','MC22012'), calculate2();" ontouchend="slidervalue('MC2012','MC22012'), calculate2();"/><input type="number" min="0" max="55" step="1" id="MC22012" value="28" style="width: 50px;" onchange="slidervalue('MC22012','MC2012'), calculate2();"/>/55</p>
			<p><label>Short Answer Score</label></p>
				<p><input type="range" id="SRQ2012" min="0" step="1" max="12" onmouseup="slidervalue('SRQ2012','SRQ22012'), calculate2();" ontouchend="slidervalue('SRQ2012','SRQ22012'), calculate2();"/><input type="number" min="0" max="12" step="1" id="SRQ22012" value="6" style="width: 50px;" onchange="slidervalue('SRQ22012','SRQ2012'), calculate2();"/>/12</p>
			<p><label>DBQ Score</label></p>
				<p><input type="range" id="DBQ2012" min="0" step="1" max="7"  onmouseup="slidervalue('DBQ2012','DBQ22012'), calculate2();" ontouchend="slidervalue('DBQ2012','DBQ22012'), calculate2();"/><input type="number" min="0" max="7" step="1" id="DBQ22012" value="4" style="width: 40px;" onchange="slidervalue('DBQ22012','DBQ2012'), calculate2();"/>/7</p>
			<p><label>Long Essay Score</label></p>
				<p><input type="range" id="LE2012" min="0" step="1" max="6"  onmouseup="slidervalue('LE2012','LE22012'), calculate2();" ontouchend="slidervalue('LE2012','LE22012'), calculate2();"/><input type="number" min="0" max="6" step="1" id="LE22012" value="3" style="width: 40px;" onchange="slidervalue('LE22012','LE2012'), calculate2();"/>/6</p>			
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
</div>
</div>


<div id="footer">
		<br>
		<br>
		<p>AP, ACT, SAT, PSAT, PLAN and Advanced Placement are registered trademarks of the College Board, which does not sponsor or endorse this product. </p>
		<p>IB and International Baccalaureate are registered trademarks of the IBO, which does not sponsor or endorse this product.</p>
		<p>Descriptions of specific AP courses are taken from multiple sources including Wikipedia.</p>
		<p>Built by KQI, send me feedback <a href="./contactus.php">here. </a> </p>
		<p style="color: white; font-size: 16px;">© 2015 Spere LLC.  <a href="./privacypolicy.php">Privacy Policy</a></p>
			
	
</div>




</body>
</html>
