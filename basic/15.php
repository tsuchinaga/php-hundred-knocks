<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i <= $n; $i += 2) printf("%d\n", $i);
