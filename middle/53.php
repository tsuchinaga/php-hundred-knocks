<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$ans = "";
for ($i = 2; true; $i++) {
    if ($n === 1) break;
    while (true) {
        if ($n % $i !== 0) break;
        if ($ans != "") $ans .= " ";
        $ans .= (string)$i;
        $n /= $i;
    }
}
print("$ans\n");
