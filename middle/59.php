<?php
print("1つめの行列\n");
$ary1 = [];
for ($i = 0; $i < 3; $i++) {
    $ary1[] = explode(" ", trim(fgets(STDIN)));
}

print("2つめの行列\n");
$ary2 = [];
for ($i = 0; $i < 3; $i++) {
    $ary2[] = explode(" ", trim(fgets(STDIN)));
}

print("和\n");
for ($i = 0; $i < 3; $i++) {
    printf("%d\t%d\t%d\n", $ary1[$i][0] + $ary2[$i][0], $ary1[$i][1] + $ary2[$i][1], $ary1[$i][2] + $ary2[$i][2]);
}
