<?php
$win = 0;
for ($i = 1; $i <= 5; $i++) {
    while (true) {
        $pc = (int)rand(0, 2);
        print("あなたの手を選んでください(グー0、チョキ1、パー2): ");
        $you = (int)trim(fgets(STDIN));
        if ($you < 0 || 2 < $you) {
            print("そんな手はありません。あなたの負け\n");
            break;
        }

        printf("コンピュータは%s\n", gcp($pc));
        switch ($pc - $you) {
            case 0:
                print("あいこ\n");
                continue 2;
            case -2:
            case 1:
                print("あなたの勝ち\n");
                $win++;
                break 2;
            case -1:
            case 2:
                print("わたしの勝ち\n");
                break 2;
        }
    }
    printf("あなた%d勝、わたし%d勝\n", $win, $i - $win);
}
if ($win >= 3) print("あなたの総合勝利です。参りました。\n");

function gcp(int $gcp)
{
    switch ($gcp) {
        case 0:
            return "グー";
        case 1:
            return "チョキ";
        case 2:
            return "パー";
    }
    return "";
}
