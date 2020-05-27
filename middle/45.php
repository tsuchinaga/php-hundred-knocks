<?php
print("距離 ");
$d = (int)trim(fgets(STDIN));
$d -= 1700;
$y = 610;

if ($d >= 0) {
    $y += ceil($d / 313) * 80;
}
print("金額 $y\n");
