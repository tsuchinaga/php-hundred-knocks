<?php
$nums = [];
for ($i = 1; $i <= 75; $i++) $nums[] = $i;

shuffle($nums);
$card = [];
for ($i = 0; $i < 25; $i++) {
    if ($i % 5 === 0) $card[] = array_fill(0, 5, 0);
    if ($i !== 12) $card[$i / 5][$i % 5] = $nums[$i];
}
print_card($card);

shuffle($nums);
$i = 0;
while (true) {
    $i++;
    print("${i}個目: ");
    $n = (int)trim(fgets(STDIN));

    [$ci, $cj] = hit_pos($card, $n);
    $hit = $ci !== -1 && $cj !== -1;
    if ($hit) {
        print("あった\n");
        $card[$ci][$cj] = 0;
    }
    print_card($card);

    if ($hit && is_bingo($card)) {
        print("***** BINGO *****\n");
        break;
    }
}

function print_card($card)
{
    foreach ($card as $line) {
        printf("%s\n", join($line, "\t"));
    }
}

function hit_pos($card, $n)
{
    foreach ($card as $i => $line) {
        foreach ($line as $j => $m) {
            if ($n === $m) return [$i, $j];
        }
    }
    return [-1, -1];
}

function is_bingo($card)
{
    // 横
    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < 5; $j++) $sum += $card[$i][$j];
        if ($sum === 0) return true;
    }

    // 縦
    for ($i = 0; $i < 5; $i++) {
        $sum = 0;
        for ($j = 0; $j < 5; $j++) $sum += $card[$j][$i];
        if ($sum === 0) return true;
    }

    // 斜め
    if ($card[0][0] + $card[1][1] + $card[2][2] + $card[3][3] + $card[4][4] === 0) return true;
    if ($card[0][4] + $card[1][3] + $card[2][2] + $card[3][1] + $card[4][0] === 0) return true;

    return false;
}
