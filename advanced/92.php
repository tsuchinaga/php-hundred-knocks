<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 || strpos($i, "3") !== false) print("aho ");
    print("$i\n");
}
