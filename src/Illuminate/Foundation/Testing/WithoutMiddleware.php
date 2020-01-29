<?php

namespace Illuminate\Foundation\Testing;

use Exception;

trait WithoutMiddleware
{
    /**
     * Setup the test trait.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->disableMiddlewareForAllTests();
    }

    /**
     * Prevent all middleware from being executed for this test class.
     *
     * @throws \Exception
     */
    public function disableMiddlewareForAllTests()
    {
        if (method_exists($this, 'withoutMiddleware')) {
            $this->withoutMiddleware();
        } else {
            throw new Exception('Unable to disable middleware. MakesHttpRequests trait not used.');
        }
    }
}
