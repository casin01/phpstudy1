<html>
<body>

    <?php

    for ($i=0 ; $i < 10 ; $i++) {
        if($i=== 5){
            continue;
            #continue 이후 코드 모두 무시하고 for문으로 돌아감
            #현재 흐름만 중지하고 반복문 지속
            #5는 출력되지 않고 6부터 다시 출력
        }
        echo "coding everybody ".$i."<br />" ;
    }
    ?>


</body>
</html>
