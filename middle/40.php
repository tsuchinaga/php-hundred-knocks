<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
printf("%d is %s\n", $n, $n % 2 === 0 ? "even" : "odd",);
