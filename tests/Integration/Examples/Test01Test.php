<?php

namespace Ht7\PhpActionsTest\Tests\Integration\Examples;

use \PHPUnit\Framework\TestCase;
use \Ht7\PhpActionsTest\Examples\Test01;

class Test01Test extends TestCase
{

    public function testDummy()
    {
        $dummy = new Test01('testtest123');

        $this->assertContains('123', $dummy->getProperty());
    }

}
