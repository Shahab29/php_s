<?php

// regular expression use a set of patterns match by preg_match pre-defined function

// set a simple pattern use (i) = case-sensitive detector

$patten = "/code/i";

// set the text data

$text = "codeWith-php";

//use preg_match pre-defined function and 
//first pass pattern and then text

//use if else  
if (preg_match($patten,$text)) {
    echo "<script>alert('your word was found')</script>";
} else {
    echo "<script>alert('your word is not found')</script>";
}

?>
