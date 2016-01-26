<?php

class wiki {

private $title, $keywords, $content;


// Changing the entire page

function setWiki($title, $keywords, $content) {

	$this->title = $title;
	$this->keywords = $keywords;
	$this->content = $content;




	}


// Changing individual sections

function set_Title ($title) {

	$this->title = $title;


}

function set_Keywords ($keywords) {


	$this->keywords = $keywords;


}

function set_Content ($content) {


	$this->content = $content;


}

 function createWikiPage() {

echo "<!DOCTYPE HTML>";
  session_start();

echo '<html lang"en">';
echo '<head>';
echo '<title>' . $this->title . '</title>';
echo '<meta name="keywords" content="' . $this->keywords . '">';
include('../Template/Smetageneral.php');
echo '<link rel="stylesheet" href="../css/courses.css">';
echo '<script src="../js/jquery-1.11.2.js"></script>';
echo '<script src="../js/coursenav.js"></script>';
include('../Template/Smetades.php');
echo '</head>';
echo '<body>';

include('../Template/Sheader.php');

echo '<div id="main">';

echo '<div id="left">';

include('../Template/Snavigation.php');
include('../Template/SAdBlockLeft.php');

echo '</div>';

echo '<div class="content" id="content" >' . $this->content. '</div></div>';



include('../Template/Sfooter.php');


echo '</body>';
echo '</html>';
}


}


class calculator extends wiki {

private $js, $css, $bool = 0;



function setCalculator($title, $keywords, $content, $js, $css) {

	$this->title = $title;
	$this->keywords = $keywords;
	$this->content = $content;
	$this->js = $js;
	$this->css = $css;




}


function setBool() {

	$this->bool = 1;



	}


function insertIBjs($bool) {
	if($bool == 1) {


	echo "<script src='../js/multib.js'></script>";
	//echo $bool;

	}


}


function createCalculator() {


echo "<!DOCTYPE HTML>";
  session_start();

echo '<html lang"en">';
echo '<head>';
echo '<title>' . $this->title . '</title>';
echo '<meta name="keywords" content="' . $this->keywords . '">';
include('../Template/Smetageneral.php');
echo '<link rel="stylesheet" href="' . $this->css . '">';
echo '<script src="../js/jquery-1.11.2.js"></script>';
echo '<script src="../js/calculatorsnav.js"></script>';
echo '<script src="' . $this->js . '"></script>';
echo '<script src="../js/multi.js"></script>';
$this->insertIBjs($this->bool);
echo '<script type="text/javascript" src="../js/calculator.js"></script>';
include('../Template/Smetades.php');
echo '</head>';
echo '<body>';

echo <<<HEREDOC
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-569d8e1db2d98f25" async="async"></script>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-569d8e1db2d98f25" async="async"></script>

HEREDOC;

include('../Template/Sheader.php');

echo '<div id="main">';

echo '<div id="left">';


include('../Template/FAdBlockLeft.php');

echo '</div>';

include('../Template/SAdBlockTop.php');




echo '<div id="home" >' . $this->content. '</div></div>';

echo '<div id="content" style="display: none"><p>Find out how prepared you are for the ' . $this->title . ' exam with AP Calculators\'s score calculators. Tags: ' . $this->keywords . '</p></div>';

include('../Template/Sfooter.php');


echo '</body>';
echo '</html>';





}

}






?>
