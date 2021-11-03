<?php echo "Hello World"; ?>
<?= "This is my first php program"; ?>


<!-- Boolean -->
<?php if(true) :  ?> Inside true
<?php else : ?> Inside else
<?php endif; ?>



<!-- Number -->
<?php
     $numberOne = 1; $numberTwo = 2;
    if($numberOne+$numberTwo === 3) echo "The sum of two number is 3";
    else echo "The sum of two number is not eqaul to 3";
?>

<?php 
$decimal= 1_22;
echo $decimal+1;?>


<!-- String -->
<?php 
echo <<<END
a
b
c
END;
?>

<?php 
$food = "vegie";
echo "I ate {$food}s";
echo "printing second character in a string vegie {$food[1]}, length of string is ";
echo strlen($food);
?>


<!-- Array -->
<?php
$animalArray = ["dog" => "Dog", "cat" => "Cat", "cow" => "Cow"];
var_dump($animalArray);
unset($animalArray['cat']);
var_dump($animalArray);
foreach($animalArray as $i => $value)
    echo $animalArray[$i], " ";
?>


<!-- Object -->
<?php 
class BaseClass {
    function printMyName(){
        echo "Gopika";
    }
};
$obj = new BaseClass;
$obj->printMyName();
?>


<!-- Callback  -->
<?php 
$double = function($a){
    echo 2*$a;
};
$numbers = range(1,10);
$new_numbers = array_map($double, $numbers);
print implode(' ', $new_numbers);
?>