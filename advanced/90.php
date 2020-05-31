<?php
$cards = [];
for ($i = 0; $i < 52; $i++) $cards[] = ["n" => $i % 13 + 1, "s" => (int)($i / 13)];
foreach ($cards as $i => $v) {
    $j = rand(0, 51);
    $tmp = $cards[$i];
    $cards[$i] = $cards[$j];
    $cards[$j] = $tmp;
}
printf("%s %s : 合計 %d\n", card_num_str($cards[0]["n"]), card_num_str($cards[1]["n"]), card_num($cards[0]["n"]) + card_num($cards[1]["n"]));

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
