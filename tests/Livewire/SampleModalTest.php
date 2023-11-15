<?php

namespace VendorName\Skeleton\Tests\Livewire;

use Livewire\Livewire;
use VendorName\Skeleton\Livewire\SampleModal;
use VendorName\Skeleton\Tests\TestCase;

class SampleModalTest extends TestCase
{

    public function test_closed_by_default()
    {
        $this->actingAs($this->admin);

        Livewire::test(SampleModal::class)
            // не видит иконки окна
            ->assertDontSee(trans('package_slug::admin.modal.title'));
    }

    public function test_smoke()
    {
        $this->actingAs($this->admin);

        Livewire::test(SampleModal::class)
            ->emit('openModal')
            ->assertSee(trans('package_slug::admin.modal.title'))
            ->assertSee(trans('package_slug::admin.modal.message'))
            ->assertSee(trans('package_slug::admin.modal.ok'));
    }

}
