<?php

namespace HelloWorld\Tests\Service;

use HelloWorld\Service\SayHello;
use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    public function testSayHelloWorld()
    {
        $this->assertEquals('Hello World, Composer!', SayHello::world());
    }
}