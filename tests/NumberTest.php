<?php
  require_once "src/Number.php";

class NumberTest extends PHPUnit_Framework_TestCase
{
  function test_name()
  {
    $test_number = new Number;
    $input = 21;
    $result = $test_number->name($input);
    $this->assertEquals("twenty one", $result);
  }
}
 ?>
