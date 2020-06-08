<?php
use \PHPUnit\Framework\TestCase;

//namespace SomeNamespace;

class BarTest extends TestCase
{
    public function testHHG()
    {
	$foo = new SomeNamespace\Bar;

	$this->assertSame(42, $foo->generate());
    }
}
