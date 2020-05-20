<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$ary = [];
for ($i = 0; $i < 10; $i++) $ary[] = $n;
foreach ($ary as $val) print("$val\n");
