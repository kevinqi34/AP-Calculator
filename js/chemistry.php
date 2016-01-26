<!DOCTYPE HTML>
<?php
  
  session_start();
  
  ?>
<html lang="en">
<head>
<title>AP Chemistry</title>
<meta charset="UTF-8" />
<meta name="keywords" content="AP Chem, AP Chemistry, Chemistry Exam, AP Score, AP Calculator, AP tests, college prep, AP courses, AP Exam, AP prep">
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
<script type="text/javascript" src="../js/chemistry.js"></script>
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



<h2>Chemistry<img src="../Science.png" alt="Science"></h2>


<h2>Version: 
<select id="version" onchange="changediv();">
  <option value="Pos2012">Post 2014</option>
  <option value="Pre2012">Pre 2014</option>
 </select>
</h2>



<div id="calculator">


	<div id="calculate">
	
	
      	<h3>Enter your scores below</h3>
			<p><label>Multiple Choice Score</label></p>
				<p><input type="range" id="MC" min="0" step="1" max="75" onmouseup="slidervalue('MC','MC2'), calculate();" ontouchend="slidervalue('MC','MC2'), calculate();"/><input type="number" min="0" max="75" step="1" id="MC2" value="38" style="width: 50px;" onchange="slidervalue('MC2','MC'), calculate();"/>/75</p>
			<p><label>Total FRQ Score (%)</label></p>
				<p><input type="range" id="FRQ1" min="0" step="1" max="100" onmouseup="slidervalue('FRQ1','FRQ11'), calculate();" ontouchend="slidervalue('FRQ1','FRQ11'), calculate();"/><input type="number" min="0" max="100" step="1" id="FRQ11" value="50" style="width: 50px;" onchange="slidervalue('FRQ11','FRQ1'), calculate();"/>/100</p>
			<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve1" onclick="calculate()" checked/>2009 curve</p>

	</div>

	<div id="calculate2" class="calculate" style="display:none;">
	
	<h3>Enter your scores below</h3>
	
		<p><label>Multiple Choice Score (Out of 50)</label></p>
				<p><input type="range" id="MC2012" min="0" step="1" max="50" onmouseup="slidervalue('MC2012','MC22012'), calculate2();" ontouchend="slidervalue('MC2012','MC22012'), calculate2();"/><input type="number" min="0" max="50" step="1" id="MC22012" value="25" style="width: 50px;" onchange="slidervalue('MC22012','MC2012'), calculate2();"/>/50</p>
		<p><label>Long Free Response Score</label></p>
				<p><input type="range" id="LFRQ" min="0" step="1" max="30" onmouseup="slidervalue('LFRQ','LFRQ2'), calculate2();" ontouchend="slidervalue('LFRQ','LFRQ2'), calculate2();"/><input type="number" min="0" max="30" step="1" id="LFRQ2" value="15" style="width: 50px;" onchange="slidervalue('LFRQ2','LFRQ'), calculate2();"/>/30</p>
		<p><label>Short Free Response Score</label></p>
				<p><input type="range" id="SFRQ" min="0" step="1" max="16" onmouseup="slidervalue('SFRQ','SFRQ2'), calculate2();" ontouchend="slidervalue('SFRQ','SFRQ2'), calculate2();"/><input type="number" min="0" max="16" step="1" id="SFRQ2" value="15" style="width: 50px;" onchange="slidervalue('SFRQ2','SFRQ'), calculate2();"/>/16</p>
		<p>Choose a score curve</p>
			<p><input type="radio" name="curve" id="curve2014" onclick="calculate()" /checked>2014 curve</p>
	
	
	
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

