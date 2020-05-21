<?php
$ans = 0;
for ($i = 0; $i < 5; $i++) {
    print("input number: ");
    $ans += (int)trim(fgets(STDIN));
}
print("sum = $ans\n");
