<?php
$day = date('j'); // day of the month

if ($day >= 21) {
  $quarter = 'last';
} else if ($day >= 14) {
  $quarter = 'third';
} else if ($day >= 7) {
  $quarter = 'second';
} else {
  $quarter = 'first';
}
echo "Nishita<br>";
echo 'You are spending the ' . $quarter . ' quarter of the month';