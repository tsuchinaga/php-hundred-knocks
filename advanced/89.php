<?php
$min = 1;
$max = 99;

$i = 0;
while (true) {
    $i++;
    $d = ($max - $min) / 2 + $min;

    printf("%dですか? ", $d);
    $n = (int)trim(fgets(STDIN));

    if (0 < $n) {
        $min = $d + 1;
    } else if ($n < 0) {
        $max = $d - 1;
    } else {
        print("${i}回で当てました\n");
        break;
    }
}
