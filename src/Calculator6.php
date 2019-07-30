<?php

function add()
{ //define function
    $args = $_SERVER['argv'][2];
    $params = explode(',', $args); //exploding string in order to avoid using loop
    $result = array_filter($params, function ($input) {
        return $input < 0;
    }); //using php array function

    $result = implode(",", $result);
    echo "Negative numbers ($result) not allowed.";
}

add(); //function call
