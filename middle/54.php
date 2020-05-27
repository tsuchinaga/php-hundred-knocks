<?php
$ans = [];
while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "") break;
    $n = (int)$input;
    if (!isset($ans["max"]) || $ans["max"] < $n) $ans["max"] = $n;
    if (!isset($ans["min"]) || $ans["min"] > $n) $ans["min"] = $n;
}
print("最小値 = ${ans["min"]}, 最大値 = ${ans["max"]}\n");
