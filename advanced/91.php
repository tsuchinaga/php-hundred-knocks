<?php
$cards = [];
for ($i = 0; $i < 52; $i++) $cards[] = ["n" => $i % 13 + 1, "s" => (int)($i / 13)];
foreach ($cards as $i => $v) {
    $j = rand(0, 51);
    $tmp = $cards[$i];
    $cards[$i] = $cards[$j];
    $cards[$j] = $tmp;
}

$hands = [card_num($cards[0]["n"]), card_num($cards[1]["n"])];
$sum = 0;
$i = 2;

while (true) {
    $sum = sum($hands);
    printf("%s : 合計%d\n", join(array_map(function($n){ return card_num_str($n); }, $hands), " "), $sum);
    if (17 <= $sum) break;
    print("もう一枚引きます\n");
    $hands[] = card_num($cards[$i]["n"]);
    $i++;
}

if (21 < $sum) {
    print("バストです\n");
} else {
    print("これでOKです\n");
}

function sum(array $hands)
{
    sort($hands);
    $sum = 0;
    $ace = 0;
    foreach ($hands as $n) {
        if ($n === 1) $ace++;
        $sum += card_num($n);
    }

    while ($ace > 0) {
        if (11 > $sum) break;
        $sum += 10;
        $ace--;
    }
    return $sum;
}

function card_num(int $n)
{
    switch ($n) {
        case 1:
            return 11;
            break;
        case 11:
        case 12:
        case 13:
            return 10;
            break;
        default:
            return (string)$n;
            break;
    }
}

function card_num_str(int $n)
{
    switch ($n) {
        case 1:
            return "A";
            break;
        case 11:
            return "J";
            break;
        case 12:
            return "Q";
            break;
        case 13:
            return "K";
            break;
        default:
            return (string)$n;
            break;
    }
}

function print_card(int $n, int $s)
{
    $a = "";
    switch ($s) {
        case 0:
            $a = "スペード";
            break;
        case 1:
            $a = "ハート";
            break;
        case 2:
            $a = "クラブ";
            break;
        case 3:
            $a = "ダイヤ";
            break;
    }

    $b = card_num_str($n);
    print("$a$b\n");
}
