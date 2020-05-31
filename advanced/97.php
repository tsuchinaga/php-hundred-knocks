<?php
$nums = [];
for ($i = 1; $i <= 75; $i++) $nums[] = $i;

shuffle($nums);
$card = [];
for ($i = 0; $i < 25; $i++) {
    if ($i % 5 === 0) $card[] = array_fill(0, 5, 0);
    if ($i !== 12) $card[$i / 5][$i % 5] = $nums[$i];
}

foreach ($card as $line) {
    printf("%s\n", join($line, "\t"));
}
