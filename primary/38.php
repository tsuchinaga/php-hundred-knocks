<?php
$ary = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
$idx = 0;
for ($i = 0; $i < 10; $i++) {
    printf("%d\n", $ary[$idx]);
    $idx = $ary[$idx];
}
