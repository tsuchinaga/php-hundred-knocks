<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j > 1) print("\t");
        print($i * $j);
    }
    print("\n");
}
