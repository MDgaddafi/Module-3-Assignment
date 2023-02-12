<?php

function evenOdd($num) {
  if ($num % 2 == 0) {
    return "Even";
  } else {
    return "Odd";
  }
}
$num = 5;
echo evenOdd($num);
?>

<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The summation of the series is $sum";
?>