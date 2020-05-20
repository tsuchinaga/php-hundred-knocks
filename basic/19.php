<?php
$ary = [];
for ($i = 0; $i < 5; $i++) {
    print("input number: ");
    $ary[] = (int)trim(fgets(STDIN));
}
foreach ($ary as $val) print("$val\n");
