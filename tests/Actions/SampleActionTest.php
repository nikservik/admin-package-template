<?php

namespace VendorName\Skeleton\Tests\Actions;

use VendorName\Skeleton\Actions\SampleAction;
use VendorName\Skeleton\Tests\TestCase;

class SampleActionTest extends TestCase
{
    public function testHandle()
    {
        $sample = SampleAction::run();

        $this->assertEquals('handle', $sample);
    }

    public function test_sample()
    {
        $this->actingAs($this->admin)
            ->get("/package_slug/action")
            ->assertStatus(200)
            ->assertSee('handle');
    }

}
