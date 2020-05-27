<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$i = 0;
while (true) {
    $i++;
    if ($n === 1) break;
    if ($n%2 === 0) {
        $n /= 2;
    } else {
        $n = $n * 3 + 1;
    }
    print("$i: $n\n");
}
