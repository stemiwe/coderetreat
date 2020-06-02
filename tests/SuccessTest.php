<?php

namespace Tests;

use App\Dummy;

class SuccessTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function get_return_status()
    {
        new Dummy();
        $this->assertTrue(false);
    }
}
