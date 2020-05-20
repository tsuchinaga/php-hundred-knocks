<?php
print("input 1st number: ");
$n = (int)trim(fgets(STDIN));
print("input 2nd number: ");
$m = (int)trim(fgets(STDIN));

printf("和: %d\n", $n + $m);
printf("差: %d\n", $n - $m);
printf("積: %d\n", $n * $m);
printf("商: %d, 余り: %d\n", $n / $m, $n % $m);
