<?php

namespace VendorName\Skeleton\Livewire;

use Illuminate\Support\Facades\Config;
use VendorName\Skeleton\CohortActions\CohortAction;
use VendorName\AdminDashboard\Modals\Modal;

class SampleModal extends Modal
{
    protected $listeners = [
        'openModal' => 'open',
    ];

    protected string $view = 'package_slug::modal';

    public string $titleKey = 'package_slug::admin.modal.title';
    public string $messageKey = 'package_slug::admin.modal.message';
    public string $okButtonKey = 'package_slug::admin.modal.ok';
    public string $cancelButtonKey = 'package_slug::admin.modal.cancel';

    // событие, которое обрабатывается в родительском компоненте
    public string $doneEvent = 'updated';
}
