<div>
    <h1 class="text-2xl text-amber-500 font-medium">Cadastrar Carro</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input type="text" wire:model="carro.placa" />

            @error('carro.placa')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input type="text" wire:model="carro.modelo" />

            @error('carro.modelo')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input type="text" wire:model="carro.marca" />

            @error('carro.marca')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input type="number" wire:model="carro.ano" />

            @error('carro.ano')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input type="text" wire:model="carro.cor" />

            @error('carro.cor')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input type="text" wire:model="carro.chassi" />

            @error('carro.chassi')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Diária</span>
            <x-admin.input type="number" step="any" min="0" wire:model="carro.diaria" />

            @error('carro.diaria')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.text-area wire:model="carro.descricao" />

            @error('carro.descricao')
                <span class="text-red-400">
                    <small>{{$message}}</small>
                </span>
            @enderror
        </label>

        <div class="self-end">
            <x-admin.button-submit />
        </div>
    </form>

</div>
