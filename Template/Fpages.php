<?php

$bool = 0;


function set_boolTrue () {

	global $bool;
	$bool = 1;
	//echo $bool;

}



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
include('./Template/Fmetageneral.php');
echo '<link rel="stylesheet" href="../css/courses.css">';
echo '<script src="./js/jquery-1.11.2.js"></script>';
echo '<script src="./js/coursenav.js"></script>';
include('./Template/Fmetades.php');
echo '</head>';
echo '<body>';

include('./Template/Fheader.php');

echo '<div id="main">';



echo '<div class="content" id="content" >' . $this->content. '</div></div>';



include('./Template/Ffooter.php');


echo '</body>';
echo '</html>';
}


}


class menu extends wiki {


public $urlList, $items, $ids, $url;

//public $title, $keywords;

function menuinit($title, $keywords) {

	$this->title = $title;
	$this->keywords = $keywords;





	}


function initArray() {

$this->urlList = array();
$this->items = array();
$this->ids = array();
$this->url = array();



}



function pushtoArray($arrayelements, $array) {





	$arrayelements = $elements = explode("|", $arrayelements);



	//echo $elements[0];


	for ($i = 0; $i <= count($elements)- 1; $i++) {

	array_push($this->$array, $elements[$i]);


	}



	//print_r(array_values($this->$array));


	}



function createMenu($id, $imgUrl, $element, $url) {

		if ($url == null) {

			for ($i = 0; $i <= count($id)- 1; $i++) {

		echo '<div class="category" id="'. $id[$i]. '">';



		echo '<img src="'. $imgUrl[$i] . '" alt="' . $element[$i] .'" >';

		echo  '<h3>'. $element[$i] . '</h3>';

    //  echo  '<a href=' . $url[i] .'"></a>';

		echo	'</div>';






		}




			}else {



		for ($i = 0; $i <= count($id)- 1; $i++) {
		echo '<div class="category" id="'. $id[$i]. '">';



		echo '<img src="'. $imgUrl[$i] . '" alt="' . $element[$i] .'" >';

		echo  '<h3>'. $element[$i] . '</h3>';

      echo  '<a href="' . $url[$i] .'"></a>';

		echo	'</div>';






		}

	}







	}


function createMenuPage() {

echo "<!DOCTYPE HTML>";
  session_start();

echo '<html lang"en">';
echo '<head>';
echo '<title>' . $this->title . '</title>';
echo '<meta name="keywords" content="' . $this->keywords . '">';
include('./Template/Fmetageneral.php');

echo '<link rel="stylesheet" href="./css/calculatorc.css">';
echo '<link rel="shortcut icon" href="./favicon.ico"/>';
echo '<script src="./js/jquery-1.11.2.js"></script>';
echo '<script src="./js/coursenav.js"></script>';
include('./Template/Fmetades.php');
echo '</head>';
echo '<body>';

include('./Template/Fheader.php');

echo '<div id="main">';

echo '<div id="left">';

include('./Template/Fnavigation.php');
include('./Template/FAdBlockLeft.php');

echo '</div>';

echo '<div class="content" id="content" >';
echo '<h2>Please Select a Category</h2>';

$this->createMenu($this->ids, $this->urlList, $this->items, $this->url);


echo  '</div></div>';



include('./Template/Ffooter.php');


echo '</body>';
echo '</html>';






	}




function createMenuCat($catID, $num) {

echo '<div class="content" id="' . $catID . '" style="display:none">';


echo "<img src='./return.png' alt='return' class='return' onclick='retur" . $num . "(\"" . $catID . "\");'>";

echo '<h2 style="width: 60%; margin-left: -20px;">Please Select Option</h2>';

$this->createMenu($this->ids, $this->urlList, $this->items, $this->url);

echo '</div>';



}

function changeIconWidth() {
echo <<<HEREDOC

	<script>

	var i = $("#ACT2").find('img');
			j = $("#SAT").find('img');
			k =$("#PSAT").find('img');


			i.width(110);
			j.width(120);
			k.width(175);



	</script>


HEREDOC;

}







}















?>
