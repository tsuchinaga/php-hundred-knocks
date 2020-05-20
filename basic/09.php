<?php
print("input number: ");
$n = (int)trim(fgets(STDIN));
if ($n > 0) print("positive\n");
else if ($n < 0) print("negative\n");
else print("zero\n");
