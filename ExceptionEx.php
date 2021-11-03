<?php
echo "Exception Example";


function divisible($number) {
    if(!$number){
        throw new Exception("Divisible by zero");
    }
    return 1/$number;
}

try{
    echo divisible(5);
    echo divisible(0);
}

catch (ArithmeticException $exception) {
    echo 'Caught exception - arithmetic: ',  $exception->getMessage(), "\n";
}

catch (Exception $exception) {
    echo 'Caught exception: ',  $exception->getMessage(), "\n";
}

?>
