<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
print((-10 <= $n && $n < 0) || 10 <= $n ? "OK\n" : "NG\n");
