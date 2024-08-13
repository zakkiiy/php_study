<?php
function chapter02_03() {
    $text = '7';
    return intval($text);
}

print chapter02_03() . "\n";

// 変数展開
$name = 'あい';
$age = 20;
print "{$name}は{$age}です。". "\n";

// if
$number = 3;
print "\n";

if ($number == 7) {
  print '七';
} elseif ($number == 5) {
  print '五';
} elseif ($number == 3) {
  print '三';
} else {
  print $number;
}

// while
$number = 1;
print "\n";
print "=== プログラム開始 ===\n";

while($number < 6) {
  print "\n";
  print "{$number}回目のループです";
  print "\n";
  $number += 1;
}
?>

