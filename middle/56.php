<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$ary = array_fill(0, 16, 0);
for ($i = 15; $i >= 0; $i--) {
    $ary[$i] = $n % 2;
    $n = (int)($n / 2);
}
print(join($ary) . "\n");
