<?php
print("石の数を入力してください（10以上）: ");
$n = (int)trim(fgets(STDIN));
print("石の数: $n\n");

$p = 0;
if (($n - 1) % 4 !== 0) {
    print("ではわたしから\n");
    $p = 1;
} else {
    print("あなたからどうぞ\n");
}

while (true) {
    if ($p === 1) {
        $g = ($n - 1) % 4;
        $n -= $g;
        printf("%d個取ります\n", $g);
    } else {
        while (true) {
            print("何個取る（1〜3個）? ");
            $c = (int)trim(fgets(STDIN));
            if ($c < 1 || 3 < $c) {
                continue;
            }
            $n -= $c;
            break;
        }
    }

    print("石の数: $n\n");
    if ($n <= 1) {
        break;
    }

    $p = ($p + 1) % 2;
}

print("わたしの勝ちです\n");
