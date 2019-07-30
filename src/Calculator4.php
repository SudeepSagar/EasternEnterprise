<?php

function sum()
{ //define function
    $args = $_SERVER['argv'][2];
    $replace_item = "\\;\\";
    $expected_args = str_replace($replace_item, '', $args);
    $replace_item = "\\";
    $expected_args = str_replace($replace_item, '', $expected_args);
    $replace_item = ";";
    $expected_args = str_replace($replace_item, ',', $expected_args);
    $params = explode(',', $expected_args); //exploding string in order to avoid using loop
    $result = array_sum($params); //using php array function
    echo $result;
}

sum(); //function call
