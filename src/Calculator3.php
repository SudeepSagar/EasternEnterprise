<?php

function sum()
{ //define function
    $args = $_SERVER['argv'][2];
    $expected_args = str_replace('\n', ',', $args);
    $params = explode(',', $expected_args); //exploding string in order to avoid using loop
    $result = array_sum($params); //using php array function
    echo $result;
}

sum(); //function call
