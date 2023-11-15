<x-admin-dashboard-app>
    <h1 class="page-header mb-6">
        @lang('package_slug::admin.list-title')
    </h1>

    <div>
        Text
    </div>

    <div class="mt-10">
        <button class="bg-green-500 rounded-lg text-center py-2 text-green-50" wire:click="open">
            Open Modal
        </button>
    </div>

    <livewire:package_slug-modal />

</x-admin-dashboard-app>
