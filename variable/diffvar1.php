<html>
<body>
    <?php
        $a = 100;
        echo gettype($a);   //변수의 타입 리턴 (integer)
        settype($a, 'double');  //변수의 타입 변환
        echo '<br />';
        echo gettype($a);   //double
        echo '<br />';
        print is_int(4);    //1
        echo '<br />';
        print is_int(3.4);  //아무것도 출력되지 않음
    ?>
</body>
</html>