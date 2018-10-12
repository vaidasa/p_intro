<?php

namespace Nfq\file2;

use MathPHP\Arithmetic;


function sum_array($values) {
  $result = null;
  foreach ($values as $value) {
    $result += $value;
  }
  return $result;
}

function sum_variadic(...$values){
  return sum_array($values);
}

function isEqual($a = 0, $b = 0){
  return Arithmetic::almostEqual($a, $b);
}