<?php
print("input number a: ");
$a = (int)trim(fgets(STDIN));
print("input number b: ");
$b = (int)trim(fgets(STDIN));
print("input number c: ");
$c = (int)trim(fgets(STDIN));

$d = $b * $b - 4 * $a * $c;
if ($d < 0) {
    print("2つの虚数解\n");
} else if ($d > 0) {
    print("2つの実数解\n");
} else {
    print("重解\n");
}
