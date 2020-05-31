<?php
$target = "";
for ($i = 0; $i < 4; $i++) {
    $target .= (string)rand(0, 9);
}

print("4桁の数字を入力: ");
$ans = (string)trim(fgets(STDIN));

print("target = $target\n");

$hit = 0;
for ($i = 0; $i < 4; $i++) {
    if ($target[$i] === $ans[$i]) {
        $hit++;
        $target[$i] = " ";
        $ans[$i] = " ";
    }
}

$blow = 0;
for ($i = 0; $i < 4; $i++) {
    if ($target[$i] === " ") continue;

    for ($j = 0; $j < 4; $j++) {
        if ($ans[$j] === " ") continue;

        if ($target[$i] === $ans[$j]) {
            $blow++;
            $target[$i] = " ";
            $ans[$j] = " ";
        }
    }
}

print("$hit hit, $blow blow\n");

