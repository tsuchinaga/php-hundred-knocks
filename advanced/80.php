<?php
print("2つの値をスペースで区切って入力: ");
$args = explode(" ", trim(fgets(STDIN)));
$a = (int)$args[0];
$b = (int)$args[1];

while (true) {
    if ($b === 0) break;

    $tmp = $a % $b;
    $a = $b;
    $b = $tmp;
}
print ($a === 1 ? "互いに素\n" : "互いに素でない\n");
