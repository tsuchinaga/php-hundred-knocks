<?php
for ($i = 1; $i <= 100; $i++) {
    $s = "";
    if ($i % 3 === 0) $s .= "foo";
    if ($i % 5 === 0) $s .= "bar";
    if ($s === "") $s = (string)$i;
    print("$s\n");
}
