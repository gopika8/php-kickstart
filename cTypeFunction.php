<?php
$input = "This is to check if the string contains only alphanumeric characters";
if(ctype_alnum($input)) echo "Yes, only alphanumeric";
else echo "No mixture of characters";
echo "<br>";

$elements = array('abc', '12', 'ABC12', 'GOPIKA', 'abc123', 'a@b%1^2', "\n");

foreach($elements as $item){
    switch($item) {
        //case ctype_alnum($item) : echo "Alpha numeric <br>"; break;
        case ctype_graph($item) : echo "printable <br>";
        // case ctype_lower($item) : echo "lower <br>";
        // case ctype_upper($item) : echo "upper <br>"; 
        case ctype_digit($item) : echo "only numeric <br>"; break;
        case ctype_alpha($item) : echo "only Alphabets <br>"; break;
        case ctype_cntrl($item) : echo "control characters <br>"; break;
        default : echo "mixed characters <br>"; break;
    }
}

?>