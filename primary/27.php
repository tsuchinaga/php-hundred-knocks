<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$sum = 0;
for ($i = 1; $i <= $n; $i++) $sum += $i;
print("sum = $sum\n");
