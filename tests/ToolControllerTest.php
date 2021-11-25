<?php

namespace namespace_vendor\namespace_tool_name\Tests;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/vendor/package_name/endpoint')
            ->assertSuccessful();
    }
}
