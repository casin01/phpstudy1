<html>
<body>
    <?php
        //TITLE의 값을 PHP Tutorial로
        define('TITLE', 'PHP Tutorial');
        echo TITLE;
        define('TITLE', 'JAVA Tutorial');
        //TITLE은 상수이므로 다른 값 대입 불가능, 에러
    ?>
</body>
</html>