<?php

namespace VendorName\Skeleton\Tests\Livewire;

use VendorName\Skeleton\Livewire\Index;
use VendorName\Skeleton\Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_smoke()
    {
        $this->actingAs($this->admin);

        $this->get('/package_slug')
            ->assertStatus(200)
            ->assertSee(trans('package_slug::admin.list-title'));
    }

}
