<?php
print("input 1st value: ");
$n = (int)trim(fgets(STDIN));
print("input 2nd value: ");
$m = (int)trim(fgets(STDIN));
printf("result: %d\nresult: %d\n", (int)($n / $m), (int)($n / $m) * $m);
