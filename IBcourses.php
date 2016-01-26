<?php

include('./Template/Fpages.php');


$wiki = new wiki;

$title = "International Baccalaureate";
$keywords="International Baccalaureate, International Baccalaureate courses, IB courses, International Baccalaureate Program, International Baccalaureate History, IB tests, college prep, IB Exam, IB prep, IB Diploma";
$content = file_get_contents('./WikiContent/IB_courses.php', true);

$wiki->setWiki($title, $keywords, $content);
$wiki->createWikiPage();


?>



