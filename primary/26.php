<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
$out = "";
switch ($n) {
    case 1:
        $out = "one";
        break;
    case 2:
        $out = "two";
        break;
    case 3:
        $out = "three";
        break;
    default:
        $out = "others";
        break;
}
print("$out\n");
