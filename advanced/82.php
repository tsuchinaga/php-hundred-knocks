<?php
$args = [1];
print("1\n");
for ($i = 0; $i < 14; $i++) {
    $line = array_merge([0], $args, [0]);
    $new = [];
    for ($j = 0; $j < count($line) - 1; $j++) $new[] = $line[$j] + $line[$j+1];
    $args = $new;
    printf("%s\n", join(" ", $args));
}
