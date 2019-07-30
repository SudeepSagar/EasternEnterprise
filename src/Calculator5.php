<?php

function add()
{ //define function
    $args = $_SERVER['argv'][2];
    $params = explode(',', $args); //exploding string in order to avoid using loop
    foreach ($params as $value) {
        if ($value < 0) {
            echo "Negative numbers not allowed.";
            break;
        }
    }
}

add(); //function c
