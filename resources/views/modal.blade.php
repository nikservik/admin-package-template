<div>
    @if($show)
        <x-admin-blade-modal
            ok-button-color="bg-blue-500"
            icon-bg-color="bg-blue-100"
            :title="trans($titleKey)"
            :ok-button="trans($okButtonKey)"
            :cancel-button="trans($cancelButtonKey)"
        >
            <x-slot name="icon">
                <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.688c0-.864.933-1.405 1.683-.977l7.108 4.062a1.125 1.125 0 010 1.953l-7.108 4.062A1.125 1.125 0 013 16.81V8.688zM12.75 8.688c0-.864.933-1.405 1.683-.977l7.108 4.062a1.125 1.125 0 010 1.953l-7.108 4.062a1.125 1.125 0 01-1.683-.977V8.688z" />
                </svg>
            </x-slot>

            @lang($messageKey)

        </x-admin-blade-modal>
    @endif
</div>
