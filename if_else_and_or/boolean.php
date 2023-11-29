<?php
#0은 false, 0이 아닌 숫자는 true

if (1 and 1){ #true
    echo 1;
}
if (1 and 0){ #false
    echo 2;
}
if (0 and 1){ #false
    echo 3;
}
if (0 and 0){ #false
    echo 4;
}

# 0 외에 값 없는 배열, 빈 문자열, NULL, 문자 0 모두 false로 간주
# php type comparison tables 참고
?>