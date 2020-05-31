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
    if ($target[$i] === $ans[$i]) $hit++;
}

print("$hit hit\n");
