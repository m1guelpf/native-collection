<?php

namespace M1guelpf\NativeCollection\Tests;

require __DIR__.'/../src/index.php';

use PHPUnit\Framework\TestCase;

class NativeCollectionTest extends TestCase
{
    /** @test */
    public function arrays_have_functions()
    {
        $this->assertEquals(['bar', 'foo'], ['foo', 'bar']->reverse());
    }
}
