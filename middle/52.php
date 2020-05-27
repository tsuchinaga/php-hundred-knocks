<?php
print("input year: ");
$y = (int)trim(fgets(STDIN));
print("${y}年は閏年で" . ($y % 4 === 0 && ($y % 100 !== 0 || $y % 400 === 0) ? "ある" : "ない") . "\n");

