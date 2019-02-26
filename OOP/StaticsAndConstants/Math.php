<?php

/**
 * NOTE: Static properties/methods can be anti-pattern to OOP because they break encapsulation
 */

class Math {
  public static $funMessage = 'I love math!';

  /**
   * You know it might be a static method if the
   * method doesn't need to reach into objects
   * and manipulate data. This function just takes 
   * some input, and spits out some output
   */
  public static function add(...$nums) {

    echo static::$funMessage . "\n";

    foreach ($nums as $num) {
      if (count($nums) == $num) {
        echo $num . " equals:\n";
        break;
      }
      echo $num . " + ";
    }
    
    return array_sum($nums);
  }
}

echo Math::add(1, 2, 3, 4, 5);
echo "\n";
echo Math::$funMessage;
echo "\n";

/**
 * Careful with static methods:
 * 
 * If this add() method then made a bunch of calls to 
 * other classes, etc., things quickly break down, it's 
 * harder to maintain, harder to test, etc.
 */