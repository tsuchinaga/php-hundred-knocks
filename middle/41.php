<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
printf("%d is %sa single figure\n", $n, 0 < $n && $n < 10 ? "" : "not ");
