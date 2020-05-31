<?php
print("3つの値を入力: ");
$args = explode(" ", trim(fgets(STDIN)));
sort($args);
print("${args[1]}\n");
