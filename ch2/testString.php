<?php
$s = "dollars";
echo 'This single quote costs a lot of $s.</br>'; // This costs a lot of $s.
echo "This double quote costs a lot of $s. </br>"; // This costs a lot of dollars. 
echo 'Start with a simple string.</br>';
echo 'String\'s apostrophe.</br>';
echo 'String with a php variable '.$s.'.'.'</br>'; 
echo "Start with a simple string.</br>"; 
echo "String's apostrophe.</br>";
echo "String with a php variable {$s}.</br>"; 
echo 'myname in single quote is faster than double quotes';
echo "myname using double quote.</br>";
$test = "variable";
echo "Hello Mr $test using double quote.</br>"; // Hello Mr variable
echo 'Hello Mr $test in single quote.'; //Hello Mr $test
?>