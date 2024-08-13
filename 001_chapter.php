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

//割り切り問題
$number = 15;
if ($number % 15 == 0) {
  print '最高！！';
} elseif ($number % 5 ==0 ) {
  print 'スクール';
} elseif ($number % 3 == 0) {
  print 'プログラミング';
} else {
  print $number;
}

// 比較
$test_01 = false;
$test_02 = true;

if ($test_01 || $test_02) {
  print 'OR';
}

?>

