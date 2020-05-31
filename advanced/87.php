<?php
print("誕生日をYYYYMMDDの形式で入力してください: ");
$s = (string)trim(fgets(STDIN));

while (true) {
    if (strlen($s) === 1 || (int)$s % 11 === 0) break;
    $sum = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        $sum += (int)$s[$i];
    }
    $s = (string)$sum;
}

print("運命数は$s\n");
