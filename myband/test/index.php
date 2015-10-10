<?php

$name = 'Cemre';

function sayHello() {
    global $name;
    echo 'The only true global = ' . $name;
}

sayHello();