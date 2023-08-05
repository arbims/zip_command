<?php

function main() {
  $a = [1,2,3,4];
  $multiple = readline();
  $file = fopen('test.txt', 'w');
  array_map(fn (int $item) => fwrite($file, $item * $multiple . "\n"), $a);
  fclose($file);
  rename('test.txt', 'mapfn.txt');
  print_r(array_reduce($a, fn ($res = NULL, int $item) => $res + $item));

}

# run main
main();
