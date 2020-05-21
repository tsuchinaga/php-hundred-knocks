<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$ans = 1;
for ($i = 2; $i <= $n; $i++) $ans *= $i;
print("factorial = $ans\n");
