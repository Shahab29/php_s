<?php

// type of varibale (local= static | dynamic = global)

$global_var = "i am a global varibal ";

// function create

function call(){

// initialize a local varibale

$local =  "i am a local varibal ";

// access global varibal pre-defined

global $global_var;

echo $local . "<br>";
echo $global_var . "<br>";

}

call();
echo  $global_var;
?>