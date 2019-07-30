<?php

function sum()
{ //define function

    $args = $_SERVER['argv'][2];
    $params = explode(',', $args); //exploding string in order to avoid using loop
    foreach ($params as $key => $value) {
        if ($value > 1000) {
            unset($params[$key]);
        }
    }
    $result = array_sum($params); //using php array function
    echo $result;
}

sum(); //function call
