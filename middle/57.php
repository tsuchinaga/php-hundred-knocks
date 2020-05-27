<?php
$n = (int)trim(fgets(STDIN));

$sum = array_fill(0, 3, 0);
$psum = array_fill(0, $n, 0);
for ($i = 0; $i < $n; $i++) {
    foreach (explode(" ", trim(fgets(STDIN))) as $key => $val) {
        $sum[$key] += (int)$val;
        $psum[$i] += (int)$val;
    }
}

printf("平均点 英語:%d, 数学:%d, 国語:%d\n", (int)($sum[0]) / $n, (int)($sum[1]) / $n, (int)($sum[2]) / $n);
print("個人合計点\n");
foreach ($psum as $i => $v) {
    printf("%d: %d\n", $i, $v);
}
