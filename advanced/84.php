<?php
$cards = [];
for ($i = 0; $i < 52; $i++) $cards[] = ["n" => $i % 13 + 1, "s" => (int)($i / 13)];
foreach ($cards as $i => $v) {
    $j = rand(0, 51);
    $tmp = $cards[$i];
    $cards[$i] = $cards[$j];
    $cards[$j] = $tmp;
}
foreach ($cards as $c) {
    print_card($c["n"], $c["s"]);
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

    $b = "";
    switch ($n) {
        case 1:
            $b = "A";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
            $b = (string)$n;
            break;
        case 11:
            $b = "J";
            break;
        case 12:
            $b = "Q";
            break;
        case 13:
            $b = "K";
            break;
    }
    print("$a$b\n");
}
