<?php
print("input money: ");
$m = (int)trim(fgets(STDIN));
printf("100円玉%d枚, 10円玉%d枚, 1円玉%d枚\n", (int)$m/100, (int)$m%100/10, (int)$m%100%10);
