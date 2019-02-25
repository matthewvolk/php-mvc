<?php

class Math {
  public static $funMessage = 'I love math!';

  /**
   * You know it might be a static method if the
   * method doesn't need to reach into objects
   * and manipulate data. This function just takes 
   * some input, and spits out some output
   */
  public static function add(...$nums) {
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