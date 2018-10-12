<?php

require_once __DIR__.'/vendor/autoload.php';

use Nfq\file1 as Strict;
use Nfq\file2 as Non_strict;

echo "\nStric\sum_array = "
  . Strict\sum_array([1, 2, 3]);

echo "\nStric\sum_variadic = "
  . Strict\sum_variadic(1, 2, 3);

echo "\nStric\sum_variadic (empty) = "
  . Strict\sum_variadic();

echo "\nStrict\isEqual = " ;
var_export(Strict\isEqual(5, 5));

echo "\nStrict\isEqual = " ;
var_export(Strict\isEqual(1.001, 1.002));

//---------------------------------------------
echo "\n----Non_strict----";
//---------------------------------------------
echo "\nNon_strict\sum_array = "
  . Non_strict\sum_array([1, 2, 3]);

echo "\nNon_strict\sum_variadic = "
  . Non_strict\sum_variadic(1, 2, 3);

echo "\nNon_strict\sum_variadic (empty) = "
  . Non_strict\sum_variadic();

echo "\nNon_strict\isEqual = " ;
var_export(Non_strict\isEqual(5, 5));

echo "\nNon_strict\isEqual = " ;
var_export(Non_strict\isEqual(1.001, 1.002));