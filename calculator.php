<?php

include('./Template/Fpages.php');
set_boolTrue();


$menu = new menu;
$menu->initArray();
$menu->pushtoArray("AP|IB|ACT|SATS|GPA", "ids");
$menu->pushtoArray("AP Score Calculators|IB Score Calculators|ACT/SAT Score Calculators|SAT Subject Tests Calculators|GPA/Final Exam Tools", "items");
$menu->pushtoArray("AP.jpg|IB.jpg|test.png|sats.png|GPA.jpg", "urlList");

$title = 'Score Calculators and Tools';
$keywords = 'Advanced Placement Calculator, IB diploma Calculator, SAT/ACT Calculator, SAT subject tests Calculator';
$menu->menuinit($title, $keywords);





echo "<!DOCTYPE HTML>"; 
  session_start();
    
echo '<html lang"en">';
echo '<head>';
echo '<title>' . $menu->title . '</title>';
echo '<meta name="keywords" content="' . $menu->keywords . '">';
include('./Template/Fmetageneral.php');    

echo '<link rel="stylesheet" href="./css/calculatorc.css">';
echo '<link rel="shortcut icon" href="./favicon.ico"/>';
echo '<script src="./js/jquery-1.11.2.js"></script>';
echo '<script src="./js/calculatornav.js"></script>';
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
echo '<h2>Please Select a Tool Category</h2>';

$menu->createMenu($menu->ids, $menu->urlList, $menu->items, $menu->url);


echo  '</div>';


$APcat = new menu;

$APcat->initArray();
$APcat->pushtoArray("Science|Math|History|Government|Language|Music", "ids");
$APcat->pushtoArray("Science|Mathematics|History|Government|Language|Music", "items");
$APcat->pushtoArray("Science.png|Math.png|History.png|Government.jpg|Language.png|Music.png", "urlList");
$APcat->createMenuCat("APcat");


$IBcat = new menu;
$TOK = new Menu;
$TOK->initArray();
$IBcat->initArray();
$TOK->pushtoArray("TOK","ids");
$TOK->pushtoArray("TOK and Extended Essay", "items");
$TOK->pushtoArray("essay.png","urlList");
$TOK->pushtoArray("./ibcalculator/tokextendedessay.php","url");
$IBcat->pushtoArray("World|Lang|Individual|Sciences|Math2", "ids");
$IBcat->pushtoArray("Group 1 - World Languages|Group 2 - Languages and Literature|Group 3 - Individuals and Society|Group 4 - Sciences| Group 5 - Mathematics", "items");
$IBcat->pushtoArray("Globe.png|Language.png|Government.jpg|Science.png|Math.png", "urlList");


echo '<div class="content" id="IBcat" style="display:none">';


echo "<img src='./return.png' alt='return' class='return' onclick='retur(\"IBcat\");'>";

echo '<h2 style="width: 60%; margin-left: -20px;">Please Select Option</h2>';

$TOK->createMenu($TOK->ids, $TOK->urlList, $TOK->items, $TOK->url);
$IBcat->createMenu($IBcat->ids, $IBcat->urlList, $IBcat->items, $IBcat->url);



echo '</div>';


//$IBcat->createMenuCat("IBcat");


$ACTcat = new menu;

$ACTcat->initArray();
$ACTcat->pushtoArray("ACT2|SAT|PSAT", "ids");
$ACTcat->pushtoArray("ACT|SAT|PSAT", "items");
$ACTcat->pushtoArray("ACT.jpg|SAT.png|PSAT.jpg", "urlList");
$ACTcat->pushtoArray("./calculator/ACT.php|./calculator/SAT.php|./calculator/PSAT.php","url");
$ACTcat->createMenuCat("ACTcat");
$ACTcat->changeIconWidth();



$SATScat = new menu;

$SATScat->initArray();
$SATScat->pushtoArray("ScienceM|Histo|Langu", "ids");
$SATScat->pushtoArray("Science and Math|History|Language", "items");
$SATScat->pushtoArray("Science.png|History.png|Language.png", "urlList");
$SATScat->createMenuCat("SATScat");



$GPAcat = new menu;

$GPAcat->initArray();
$GPAcat->pushtoArray("GPA|Final", "ids");
$GPAcat->pushtoArray("GPA Calculator|Final Grade Calculator", "items");
$GPAcat->pushtoArray("GPA.png|Final.png", "urlList");
$GPAcat->pushtoArray("./calculator/GPA.php|./calculator/finalgrade.php","url");
$GPAcat->createMenuCat("GPAcat");




$APScience = new menu;

$APScience->initArray();
$APScience->pushtoArray("Micro|Macro|EnvironmentSci|HuGeo|Psych|Biology|Chem|PhysicsB|Physics1|Physics2|PhysicsCMech|PhysicsCElec|CompSci", "ids");
$APScience->pushtoArray("Microeconomics|Macroeconomics|Environmental Science|Human Geography|Psychology|Biology|Chemistry|Physics B|Physics 1|Physics 2|Physics C Mechanics|Physics C Electricity|Computer Science", "items");
$APScience->pushtoArray("Money.png|Money.png|Environment.png|Globe.png|Brain.png|DNA.jpg|Science.png|Physics.png|Physics.png|Physics.png|Mechanics.png|Electricity.png|Computer.png", "urlList");
$APScience->pushtoArray("./calculator/microeconomics.php|./calculator/macroeconomics.php|./calculator/environmentalscience.php|./calculator/humangeography.php|./calculator/psychology.php|./calculator/biology.php|./calculator/chemistry.php|./calculator/physicsb.php|./calculator/physics1.php|./calculator/physics2.php|./calculator/physicscmechanics.php|./calculator/physicscelectricity.php|./calculator/computerscience.php","url");
$APScience->createMenuCat("APScience", 2);


$APMath = new menu;

$APMath->initArray();
$APMath->pushtoArray("Stat|CalcAB|CalcBC","ids");
$APMath->pushtoArray("Statistics|Calculus AB|Calculus BC","items");
$APMath->pushtoArray("Stat.png|Calc.png|Calc.png","urlList");
$APMath->pushtoArray("./calculator/statistics.php|./calculator/calculusab.php|./calculator/calculusbc.php","url");
$APMath->createMenuCat("APMath", 2);



$APHistory = new menu;

$APHistory->initArray();
$APHistory->pushtoArray("Euro|ArtHis|USHis|WorldHis","ids");
$APHistory->pushtoArray("European History|Art History|U.S. History|World History","items");
$APHistory->pushtoArray("History.png|Art.jpg|USAHis.jpg|Globe.png","urlList");
$APHistory->pushtoArray("./calculator/europeanhistory.php|./calculator/arthistory.php|./calculator/ushistory.php|./calculator/worldhistory.php","url");
$APHistory->createMenuCat("APHistory", 2);

$APGovernment = new menu;

$APGovernment->initArray();
$APGovernment->pushtoArray("USGov|CompGov","ids");
$APGovernment->pushtoArray("U.S. Government|Comparative Government","items");
$APGovernment->pushtoArray("USgov.jpg|Government.jpg","urlList");
$APGovernment->pushtoArray("./calculator/usgovernment.php|./calculator/comparativegovernment.php","url");
$APGovernment->createMenuCat("APGovernment", 2);



$APLanguage = new menu;

$APLanguage->initArray();
$APLanguage->pushtoArray("EnglishLan|EnglishLit|FrenchLit|GermanLit|SpanishLan|SpanishLit|Latin:Vergil","ids");
$APLanguage->pushtoArray("English Language|English Literature|French Language|German Language|Spanish Language|Spanish Literature|Latin: Vergil","items");
$APLanguage->pushtoArray("English.png|English.png|French.gif|Germany.jpeg|Spain.jpeg|Spain.jpeg|Italy.png","urlList");
$APLanguage->pushtoArray("./calculator/englishlanguage.php|./calculator/englishliterature.php|./calculator/frenchlanguage.php|./calculator/germanlanguage.php|./calculator/spanishlanguage.php|./calculator/spanishliterature.php|./calculator/latinvergil.php","url");
$APLanguage->createMenuCat("APLanguage", 2);


$APMusic = new menu;

$APMusic->initArray();
$APMusic->pushtoArray("Music","ids");
$APMusic->pushtoArray("Music Theory","items");
$APMusic->pushtoArray("Music.png","urlList");
$APMusic->pushtoArray("./calculator/musictheory.php","url");
$APMusic->createMenuCat("APMusic", 2);



$SATScienceM = new menu;

$SATScienceM->initArray();
$SATScienceM->pushtoArray("SATMath1|SATMath2|SATBio|SATPhysics|SATChem","ids");
$SATScienceM->pushtoArray("Math 1|Math 2|Biology|Physics|Chemistry","items");
$SATScienceM->pushtoArray("Math.png|Math.png|DNA.jpg|Mechanics.png|Science.png","urlList");
$SATScienceM->pushtoArray("./calculator/SATmath1.php|./calculator/SATmath2.php|./calculator/SATbiology.php|./calculator/SATphysics.php|./calculator/SATchemistry.php","url");
$SATScienceM->createMenuCat("SATScienceM", 4);


$SATHisto = new menu;

$SATHisto->initArray();
$SATHisto->pushtoArray("SATUS|SATWorld","ids");
$SATHisto->pushtoArray("US History|World History","items");
$SATHisto->pushtoArray("USAHis.jpg|Globe.png","urlList");
$SATHisto->pushtoArray("./calculator/SATushistory.php|./calculator/SATworldhistory.php","url");
$SATHisto->createMenuCat("SATHisto", 4);

$SATLangu = new menu;

$SATLangu->initArray();
$SATLangu->pushtoArray("SATLit|SATSpanish|SATFrench","ids");
$SATLangu->pushtoArray("Literature|Spanish|French","items");
$SATLangu->pushtoArray("Language.png|Spain.jpeg|French.gif","urlList");
$SATLangu->pushtoArray("./calculator/SATliterature.php|./calculator/SATspanish.php|./calculator/SATfrench.php","url");
$SATLangu->createMenuCat("SATLangu", 4);

$IBWorld = new menu;

$IBWorld->initArray();
$IBWorld->pushtoArray("IBArab|IBEng|IBSpan","ids");
$IBWorld->pushtoArray("Arabic A1 HL/SL|English A1 HL/SL|Spanish A1 HL/SL","items");
$IBWorld->pushtoArray("Arabic.jpg|English.png|Spain.jpeg","urlList");
$IBWorld->pushtoArray("./ibcalculator/arabic.php|./ibcalculator/englisha1.php|./ibcalculator/spanisha1.php","url");
$IBWorld->createMenuCat("IBWorld", 3);



$IBLang = new menu;

$IBLang->initArray();
$IBLang->pushtoArray("IBEnglisha2","ids");
$IBLang->pushtoArray("English A2 HL/SL","items");
$IBLang->pushtoArray("English.png","urlList");
$IBLang->pushtoArray("./ibcalculator/englisha2.php","url");
$IBLang->createMenuCat("IBLang", 3);



$IBIndividual = new menu;

$IBIndividual->initArray();
$IBIndividual->pushtoArray("IBEcon|IBGeograp|IBHistor|IBPsych","ids");
$IBIndividual->pushtoArray("Economics HL/SL|Geography HL/SL|History HL/SL|Psychology HL/SL","items");
$IBIndividual->pushtoArray("Money.png|Globe.png|History.png|Brain.png","urlList");
$IBIndividual->pushtoArray("./ibcalculator/economics.php|./ibcalculator/geography.php|./ibcalculator/history.php|./ibcalculator/psychology.php","url");
$IBIndividual->createMenuCat("IBIndividual", 3);


$IBSciences = new menu;

$IBSciences->initArray();
$IBSciences->pushtoArray("IBBio|IBChem|IBPhysics","ids");
$IBSciences->pushtoArray("Biology HL|Chemistry HL|Physics HL","items");
$IBSciences->pushtoArray("DNA.jpg|Science.png|Mechanics.png","urlList");
$IBSciences->pushtoArray("./ibcalculator/biology.php|./ibcalculator/chemistry.php|./ibcalculator/physics.php","url");
$IBSciences->createMenuCat("IBSciences", 3);


$IBMath2 = new menu;

$IBMath2->initArray();
$IBMath2->pushtoArray("IBComp|IBMath2","ids");
$IBMath2->pushtoArray("Computer Science HL/SL|Mathematics HL/SL","items");
$IBMath2->pushtoArray("Computer.png|Math.png","urlList");
$IBMath2->pushtoArray("./ibcalculator/computers.php|./ibcalculator/mathematics.php","url");
$IBMath2->createMenuCat("IBMath2", 3);


echo '</div>';



include('./Template/Ffooter.php');


echo '</body>';
echo '</html>';






?>


