#!/usr/bin/php -q

<?php

/**
 * Secret function.
 * @param  [int] $i - Accept an integer.
 * @return [int]
 */
function secret($i) {
  return $i;
}

class CodingExercise {
  /**
  * Constructor
  */
  public function __construct(){
  }
  /**
  * Get all prime numbers given an upper limit.
  * @param  [int] $n - Upper limit.
  * @return [int[]]
  */
  private function getPrimes($n) {
    /* Implement https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes */
    $arr = array_fill(0, $n + 1, NULL); /* arr is a temporary array to mark non-prime numbers */
    $primes = array();
    for($i = 2; $i <= $n; $i++) { /* Start with 2 */
      if($arr[$i] !== false) {
        array_push($primes, $i); /* Elements that are not false */
        for($j = pow($i, 2); $j <= $n; $j += $i) { /* Mark multiples of $i as false (i.e. non-prime) */
          $arr[$j] = false;
        }
      }
    }
    return $primes;
  }
  /**
  * Get unique pairs of an array the imperative way.
  * @param  [int[]] $arr - Array of ints.
  * @return [int[int[]]]
  */
  private function getPairs($arr) {
    $len = sizeof($arr);
    $pairs = array();
    for ($i = 0; $i < $len; $i++) {
      for ($j = $i + 1; $j < $len; $j++) { /* For each value after $i, pair consecutive $i's */
        $pairs[] = array($arr[$i], $arr[$j]);
      }
    }
    return $pairs;
  }
  /**
  * Is the secret function additive?
  * @param  [int] $x - First int.
  * @param  [int] $y - Second int.
  * @return boolean
  */
  private function isAdditive($x, $y) {
    return secret($x + $y) === secret($x) + secret($y);
  }
  /**
  * Tests all unique pairs of prime numbers to determine if the secret function is additive. Print out the object for info.
  * @param  [int] $n - Test all prime numbers up to this number.
  * @return [boolean]
  */
  function areAllPairsAdditive($n) {
    $this->limit = $n;
    $this->primes = $this->getPrimes($this->limit);
    $this->pairs = $this->getPairs($this->primes);
    if(intval($this->limit) !== 0) {
      foreach($this->pairs as $key => $value) {
        if($this->isAdditive($value[0], $value[1]) !== true) { /* Iterate until a pair is not additive */
          echo "secret() is not additive\r\n";
          return false;
        }
      }
    }
    echo "secret() is additive\r\n";
    return true;
  }
}

$ce = new CodingExercise(); /* Instantiate the class */
$ce->areAllPairsAdditive($argv[1]);
exit(0);

?>