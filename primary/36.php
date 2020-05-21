<?php
print("input index1: ");
$n = (int)trim(fgets(STDIN));
print("input index2: ");
$m = (int)trim(fgets(STDIN));
$ary = [3, 7, 0, 8, 4, 1, 9, 6, 5, 2];
printf("${ary[$n]} * ${ary[$m]} = %d\n", $ary[$n] * $ary[$m]);
