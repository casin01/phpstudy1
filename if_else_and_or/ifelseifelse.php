<?php
if(false){  #출력X
    echo 1;
} else if (true) {  #출력O
    echo 2;
} else if(true) {   #출력X (위에서 true인 게 있으므로)
    echo 3;
} else {    #출력X
    echo 4;
}
?>