<?php
$ans = rand(1, 99);

$i = 0;
while (true) {
    $i++;
    print("数を入力: ");
    $n = (int)trim(fgets(STDIN));
    if ($n < $ans) {
        print("それいより大きいです\n");
    } else if ($ans < $n) {
        print("それいより小さいです\n");
    } else {
        print("正解!! ${i}回でクリア\n");
        break;
    }
}
