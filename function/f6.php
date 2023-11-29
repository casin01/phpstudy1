<?php
function get_ ($arg) {
    $test=5;
    return $arg;
}


echo get_(1);
echo $arg;  #선언되지않은 지역변수를 호출하므로 에러

?>