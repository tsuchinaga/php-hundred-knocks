<?php
print("start: ");
$start = (int)trim(fgets(STDIN));
print("end: ");
$end = (int)trim(fgets(STDIN));

for ($i = $start; $i <= $end; $i++) {
    if ($i % 3 === 0 || strpos($i, "3") !== false) print("aho ");
    print("$i\n");
}
