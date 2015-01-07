<?php
  class VarTest extends PHPUnit_Framework_TestCase {
    public function testAdd() {
      $one_plus_two_succeed = 1 + 2;
      $this->assertEquals($one_plus_two_succeed, 3);
    }
  }
?>
