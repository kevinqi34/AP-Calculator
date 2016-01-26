<?php

include('./Template/Fpages.php');


$wiki = new wiki;

$title = "Advanced Placement";
$keywords="Advanced Placement, AP courses, Advanced Placement courses, Advanced Placement Program, Advanced Placement History, AP tests, college prep, AP courses, AP Exam, AP prep";
$content = file_get_contents('./WikiContent/AP_courses.php', true);

$wiki->setWiki($title, $keywords, $content);
$wiki->createWikiPage();


?>



