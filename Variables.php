<!-- sample -->

<!-- we can re-asign to same variable, case sensitive -->

<?php
$val=1;
$Val=2;
$val = 'Gopika';
echo $val,$Val;
?>


<!-- reference -->
<?php
$demoVar = "sample";
$refOfDemoVar = &$demoVar;
$refOfRef = &$refOfDemoVar;
echo $demoVar, $refOfDemoVar, $refOfRef;
?>


<!-- scope of variable -->
<!-- without gloabal keyword -->
<?php 
$language = " php";
function changeLanguage(){
    $language = "java and php ";
    echo $language;
}
changeLanguage();
echo $language;
?>

<!-- with gloabal keyword -->
<?php 
$language = " php";
function changeLanguages(){
    global $language;
    $language = "java and php ";
    echo $language;
}
changeLanguages();
echo $language;
?>

<!-- static variable -->
<?php 
function changeNumbers(){
    static  $number = 1;
    $number++;
    echo $number;
}
changeNumbers(); //2
changeNumbers(); //3
changeNumbers(); //4
?>

<?php
function foo(){
    static $int = 0;       
    static $int = 1+2;        
    $int++;
    echo $int;
}
foo();
?>

<!-- variable variable -->
<?php 
$world = "World";
$$world = "Hello";
echo $world , $$world;
echo "$world, ${$world}"
?>