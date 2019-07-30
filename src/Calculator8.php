<?php

function multiply()
{ //define function
    $args = $_SERVER['argv'][2];
    $params = explode(',', $args); //exploding string in order to avoid using loop
    $result = 1;
    for ($i = 0; $i < count($params); $i++) {
        $result = $result * $params[$i];
    }
    echo $result;
}

multiply(); //function call
