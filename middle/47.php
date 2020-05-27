<?php
print("input a: ");
$a = (int)trim(fgets(STDIN));
print("input b: ");
$b = (int)trim(fgets(STDIN));

$tmp = $a;
$a = $b;
$b = $tmp;
print("a = $a, b = $b");
