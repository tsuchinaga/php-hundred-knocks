<?php
print("何円? ");
$yen = (int)trim(fgets(STDIN));

print("1ドルは何円? ");
$dy = (int)trim(fgets(STDIN));

printf("%d円は%dドル%dセント\n", $yen, $yen / $dy, ($yen % $dy * 100) / $dy);
