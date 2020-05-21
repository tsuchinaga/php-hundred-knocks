<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
for ($i = 1; $i < 10; $i++) {
    if ($i !== $n && $i !== $n+1) print("$i\n");
}
