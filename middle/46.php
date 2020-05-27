<?php
print("人数 ");
$n = (int)trim(fgets(STDIN));

$yen = 600;
if ($n >= 20) {
    $yen = 500;
} else if ($n >= 5) {
    $yen = 550;
}
printf("料金 %d\n", $n * $yen);
