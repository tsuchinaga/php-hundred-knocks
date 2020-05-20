<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
if ($n < 0) $n *= -1;
printf("absolute value is %d\n", $n);
