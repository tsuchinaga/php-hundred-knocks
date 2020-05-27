<?php
print("input number 1: ");
$n = (int)trim(fgets(STDIN));
$res = true;
for ($i = 2; $i <= 3; $i++) {
    print("input number $i: ");
    $m = (int)trim(fgets(STDIN));
    if ($n > $m) $res = false;
}
print($res ? "OK" : "NG");
