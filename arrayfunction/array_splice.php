
<?php
array_push($input, $x, $y);
array_splice($input, count($input), 0, array($x, $y));
array_pop($input);
array_splice($input, -1);
array_shift($input);
array_splice($input, 0, 1);
array_unshift($input, $x, $y);
array_splice($input, 0, 0, array($x, $y));
$input[$x] = $y; // for arrays where key equals offset
array_splice($input, $x, 1, $y);
?>
