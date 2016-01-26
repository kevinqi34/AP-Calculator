<?php

include('./Template/Fpages.php');

set_boolTrue();
$menu = new menu;
$menu->initArray();
$menu->pushtoArray("AP|IB|ACT|SATS", "ids");
$menu->pushtoArray("./APcourses.php|./IBcourses.php|./StdTests.php|./SubjectTests.php", "url");
$menu->pushtoArray("Advanced Placement|International Baccalaureate|Standardized Tests|SAT Subject Tests ", "items");
$menu->pushtoArray("AP.jpg|IB.jpg|test.png|sats.png", "urlList");

$title = 'Course Info and Resources';
$keywords = 'Advanced Placement info, IB diploma info, SAT/ACT info, SAT subject tests info';
$menu->menuinit($title, $keywords);
$menu->createMenuPage();


?>

