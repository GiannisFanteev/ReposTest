<?php
function noOdds($arr) {
  return array_filter($arr, function($i) {
    return $i % 2 === 0;
  });
}

print_r(noOdds([43, 65, 23, 89, 53, 9, 6]));
?>
