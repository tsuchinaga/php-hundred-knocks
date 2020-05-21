<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    if ($i%5 === 0 && $i !== 0) print(" ");
    print("*");
}
print("\n");
