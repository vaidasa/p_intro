<?php

declare(strict_types=1);

namespace Nfq\file1;

use MathPHP\Arithmetic;

function sum_array(array $values): ?int {
  $result = null;
  foreach ($values as $value) {
    $result += $value;
  }
  return $result;
}

function sum_variadic(...$values): int {
  return (int)sum_array($values);

}

function isEqual(float $a = 0, float $b = 0): bool {
  return Arithmetic::almostEqual($a, $b);
}
