<?php
$ary = array_fill(0, 5, 0);
for ($i = 0; $i < 5; $i++) {
    printf("input data[%d]: ", $i);
    $ary[$i] = (int)trim(fgets(STDIN));
}

foreach ($ary as $i => $v) {
    $s = array_fill(0, (int)($v / 5), "*****");
    if ((int)$v % 5 !== 0) $s[] = str_repeat("*", (int)$v % 5);
    printf("%d\t:%s\n", $v, join($s, " "));
}
