<?php

namespace Xu\TravisTest;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function test()
    {
        $this->assertNull(null);
    }

}
