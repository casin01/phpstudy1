<?php

$test=3;    #전역변수
function get_ ($arg) {
    $test=5;    #지역변수
    echo $test;
}

get_(1);
echo $test;

?>