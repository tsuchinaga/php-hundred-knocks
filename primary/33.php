<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
for ($i = 1; $i < 10; $i++) {
    if ($i !== $n) print("$i\n");
}
