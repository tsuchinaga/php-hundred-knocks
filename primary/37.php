<?php
print("input index: ");
$n = (int)trim(fgets(STDIN));
$ary = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
printf("value = %d\n", $ary[$ary[$n]]);
