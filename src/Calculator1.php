<?php

function add()
{ //define function

    if (array_key_exists('2', $_SERVER['argv'])) { //checking if key exist in array
        $args = $_SERVER['argv'][2];
        $params = explode(',', $args); //exploding string in order to avoid using loop
        $result = array_sum($params); //using php array function
    } else {
        $result = 0;
    }
    echo $result;
}

add(); //function call
