<section>
    <h1 class="text-2xl text-amber-500 font-medium">Carros</h1>

    <table class="bg-gradient-to-r from-amber-500 to-amber-700 mx-auto m-5 w-5/6 rounded-lg text-amber-50">
        <thead>
            <tr class="text-left border-b border-amber-300">
                <th class="px-4 py-3">Placa</th>
                <th class="px-4 py-3">Modelo</th>
                <th class="px-4 py-3">Marca</th>
                <th class="px-4 py-3">Cor</th>
                <th class="px-4 py-3">Diária</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($carros as $carro)
                <tr class="bg-amber-600 border-b border-amber-300 hover:bg-amber-500">
                    <td class="px-4 py-3">{{ $carro->placa }}</td>
                    <td class="px-4 py-3">{{ $carro->modelo }}</td>
                    <td class="px-4 py-3">{{ $carro->marca }}</td>
                    <td class="px-4 py-3">{{ $carro->cor }}</td>
                    <td class="px-4 py-3">{{ $carro->diaria }}</td>
                </tr>
            @empty
                <tr class="bg-amber-600 border-b border-amber-300 hover:bg-amber-500">
                    <td class="px-4 py-3" colspan="5">Não há dados cadastrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
