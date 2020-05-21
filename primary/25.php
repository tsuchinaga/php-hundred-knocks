<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$range = 0;
if ($n < -10) $range = 1;
else if ($n < 0) $range = 2;
else $range = 3;
printf("range %d\n", $range);
