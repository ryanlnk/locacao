<div>
    <h1 class="text-2xl text-amber-500 font-medium">Cadastrar Carro</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input type="text" wire:model="placa" />
        </label>

        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input type="text" wire:model="modelo" />
        </label>

        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input type="text" wire:model="marca" />
        </label>

        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input type="number" wire:model="ano" />
        </label>

        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input type="text" wire:model="cor" />
        </label>

        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input type="text" wire:model="chassi" />
        </label>

        <label>
            <span class="text-gray-700">Diária</span>
            <x-admin.input type="number" step="any" min="0" wire:model="diaria" />
        </label>

        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.text-area wire:model="descricao" />
        </label>

        <div class="self-end">
            <x-admin.button-submit />
        </div>
    </form>

</div>
