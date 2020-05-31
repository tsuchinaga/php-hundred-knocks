<?php
print("石の数を入力してください（10以上）: ");
$n = (int)trim(fgets(STDIN));

$p = 0;
while (true) {
    print("石の数: $n\n");
    if ($n <= 1) {
        break;
    }
    while(true) {
        printf("プレイヤー%dの番です\n", $p + 1);
        print("何個取る（1〜3個）? ");
        $c = (int)trim(fgets(STDIN));
        if ($c < 1 || 3 < $c) {
            continue;
        }
        $n -= $c;
        break;
    }
    $p = ($p + 1) % 2;
}

if ($n === 1) {
    printf("プレイヤー%dの勝ちです\n", $p+1);
} else {
    printf("プレイヤー%dの反則負け\n", $p+1);
}
