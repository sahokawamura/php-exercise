<?php  

$score_math = 15;
$score_english = 24;

if ($score_math >= 60 and $score_english >= 60) {
    echo '合格';
} else if ($score_math >= 50 or $score_english >= 50) {
    echo '再試験';
} else {
    echo '不合格';
}