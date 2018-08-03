<?php 

declare(strict_types=1);

USE PHPUnit\Framework\TestCase;
require __DIR__."/../index.php";


class blblTest extends TestCase
{
 public function testUseless() {
 	$this->assertEquals(42, jpp::blbl());
 }
}
?>