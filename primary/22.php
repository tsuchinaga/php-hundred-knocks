<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
if ($n <= -10 || 10 <= $n) print("OK\n");
