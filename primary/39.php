<?php
$ary = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
for ($i = 0; $i < 9; $i++) {
    printf("%d\n", $ary[$i] - $ary[$i+1]);
}
