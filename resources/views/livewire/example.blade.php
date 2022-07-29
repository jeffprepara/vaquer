<div>
    <h1>Ola mundo</h1>
    <x-jet-button wire:click='increment'>
        +
    </x-jet-button>

    <x-jet-button wire:click='decrement'>
        -
    </x-jet-button>

    <x-jet-button wire:click="toggleModal">
        Show Modal
    </x-jet-button>


    @if ($modal)
        <x-jet-confirmation-modal wire:model='modal'>
            <x-slot name="title">
                Titulo do modal
            </x-slot>

            <x-slot name="content">
                Conteudo
            </x-slot>


            <x-slot name="footer">
                <x-jet-button class="bg-red-600">
                    Cancelar
                </x-jet-button>

                <x-jet-button class="bg-green-600">
                    Continuar
                </x-jet-button>
            </x-slot>

        </x-jet-confirmation-modal>
    @endif

    <p> {{ $number }} </p>
    <p> {{ $modal }} </p>
</div>
